@extends('layouts.auth')
@section('title', 'Recupero Password')
@section('content')
    <h3 class="h5 text-dark mb-3 fw-bold">Recupera Password</h3>
    <p class="text-muted small mb-4">Inserisci la tua email per ricevere il link di ripristino.</p>
    <form method="GET" action="{{ route('login') }}">
        <div class="form-group mb-4">
            <div class="input-group">
                <input type="email" class="form-control" id="email" required>
                <label for="email">Indirizzo Email</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Invia link</button>
    </form>
@endsection
