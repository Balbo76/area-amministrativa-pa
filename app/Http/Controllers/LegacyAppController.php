<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LegacyAppController extends Controller
{
    public function handlePippo(Request $request, $path = 'index.php')
    {
        return $this->executeLegacyBridge($request, 'pippo', $path);
    }

    public function handleFatturazione(Request $request, $path = 'index.php')
    {
        return $this->executeLegacyBridge($request, 'fatturazione', $path);
    }

    /**
     * Motore di orchestrazione del bridge Legacy
     */
    private function executeLegacyBridge(Request $request, string $folderName, string $path)
    {
        // 1. Risoluzione e sanificazione del path
        $path = $path ?: 'index.php';
        $basePath = base_path("legacy/{$folderName}/");
        $filePath = realpath($basePath . $path);

        // Se il path è una cartella, cerco l'index.php interno
        if ($filePath && is_dir($filePath)) {
            $filePath = realpath($filePath . '/index.php');
        }

        // Protezione Directory Traversal e 404
        if (!$filePath || !str_starts_with($filePath, $basePath) || !file_exists($filePath)) {
            abort(404, "Risorsa legacy non trovata.");
        }

        // 2. Intercettamento e gestione Asset Statici
        $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        $staticExtensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'pdf'];

        if (in_array($extension, $staticExtensions)) {
            return response()->file($filePath);
        }

        // 3. Condivisione e attivazione dello stato della Sessione
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Iniettiamo i dati di Laravel necessari al vecchio codice
        $_SESSION['user_id'] = auth()->id();
        $_SESSION['user_email'] = auth()->user()->email ?? null;

        // 4. Isolamento dell'esecuzione tramite Output Buffering
        ob_start();
        try {
            // Variabile esposta nel caso il file legacy volesse interagire con Laravel
            $laravelRequest = $request;

            // Esecuzione fisica del file legacy
            require $filePath;

        } catch (\Throwable $e) {
            ob_end_clean();
            session_write_close();
            throw $e; // Rilancia l'errore a Laravel per il logging (Sentry/Log standard)
        }

        // 5. Cattura dell'output e chiusura della sessione nativa
        $content = ob_get_clean();

        // Se il codice legacy ha scritto in $_SESSION, i dati rimangono persistiti sul file di sessione nativo
        session_write_close();

        // 6. Ritorno della response conforme a Laravel
        return response($content)
            ->header('Content-Type', 'text/html; charset=UTF-8');
    }
}
