<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiPermissions
{
    /**
     * Gestisce la richiesta in entrata per gli endpoint API.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // TODO: Inserire qui la logica di controllo token / permessi API.
        // Esempio futuro: if (!$request->user()->tokenCan('api:read')) { return response()->json(['error' => 'Forbidden'], 403); }

        // Per ora lascia passare la richiesta senza bloccarla
        return $next($request);
    }
}
