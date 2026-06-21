<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Mostra la schermata di login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Gestisce la richiesta di autenticazione.
     */
    public function login(Request $request)
    {
        // 1. Validazione stringente dei dati in ingresso
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'L\'indirizzo email è obbligatorio.',
            'email.email' => 'Inserisci un indirizzo email valido.',
            'password.required' => 'La password è obbligatoria.',
        ]);

        // Gestione opzionale del checkbox "Ricordami"
        $remember = $request->has('remember');

        // 2. Tentativo di autenticazione sul database
        if (Auth::attempt($credentials, $remember)) {
            // Rigenera la sessione per prevenire attacchi di Session Fixation
            $request->session()->regenerate();

            // Reindirizza l'utente alla dashboard o alla pagina che stava tentando di visitare
            return redirect()->intended(route('admin.dashboard'))
                ->with('success', 'Accesso effettuato con successo. Benvenuto nel pannello!');
        }

        // 3. Se l'autenticazione fallisce, restituisce l'errore al form
        throw ValidationException::withMessages([
            'email' => ['Le credenziali inserite non sono corrette.'],
        ]);
    }

    /**
     * Esegue il logout dell'utente.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalida e rigenera il token CSRF della sessione per sicurezza
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome')
            ->with('success', 'Sessione terminata correttamente.');
    }
}
