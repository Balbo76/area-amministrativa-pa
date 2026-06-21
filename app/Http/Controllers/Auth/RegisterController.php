<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    /**
     * Mostra la schermata di registrazione.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Gestisce la creazione di un nuovo utente.
     */
    public function register(Request $request)
    {
        // 1. Validazione approfondita e confronto delle password
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.required' => 'Il nome completo è obbligatorio.',
            'email.required' => 'L\'indirizzo email è obbligatorio.',
            'email.unique' => 'Questo indirizzo email è già registrato nei nostri sistemi.',
            'password.required' => 'La password è obbligatoria.',
            'password.confirmed' => 'Le due password inserite non corrispondono.',
        ]);

        // 2. Creazione dell'utente sul database con password crittografata
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'ruolo' => 'operatore', // Opzionale: puoi preimpostare un ruolo base qui
        ]);

        // 3. Autenticazione automatica immediata dopo la registrazione
        Auth::login($user);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Account creato con successo! Accesso effettuato.');
    }
}
