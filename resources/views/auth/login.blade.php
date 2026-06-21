@extends('layouts.auth')
@section('title', 'Accedi')
@section('content')
    <h3 class="h5 text-dark mb-4 fw-bold">Accedi al pannello</h3>
    <!-- Reindirizza direttamente alla dashboard simulando l'accesso con metodo GET -->
    <form method="POST" action="{{ route('login') }}">
        <div class="form-group mb-3">
            <div class="input-group">
                <input type="email" class="form-control" id="email" required>
                <label for="email">Indirizzo Email</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <div class="input-group">
                <input type="password" class="form-control" id="password" required>
                <label for="password">Password</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Accedi</button>
    </form>
    <div class="mt-3 text-center">
        <a href="{{ route('password.request') }}" class="small text-decoration-none">Password dimenticata?</a>
    </div>
@endsection
