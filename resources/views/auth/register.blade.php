@extends('layouts.auth')
@section('title', 'Registrati')
@section('content')
    <h3 class="h5 text-dark mb-4 fw-bold">Crea Account</h3>
    <form method="POST" action="{{ route('register') }}">
    <div class="form-group mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="name" required>
                <label for="name">Nome Completo</label>
            </div>
        </div>
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
        <button type="submit" class="btn btn-primary w-100">Registrati</button>
    </form>
@endsection
