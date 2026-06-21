<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminPermissions
{
    /**
     * Gestisce la richiesta in entrata per l'area amministrativa.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // TODO: Inserire qui la logica di controllo permessi per il backend.
        // Esempio futuro: if (!auth()->user()->hasPermissionTo('access-admin')) { abort(403); }

        // Per ora lascia passare la richiesta senza bloccarla
        return $next($request);
    }
}
