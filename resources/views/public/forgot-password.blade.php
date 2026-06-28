@extends('public.layout.public-layout')
@section('title', 'Recupero Password')
@section('content')
    <div class="container align-items-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow border-0">
                    <div class="card-body p-4">

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


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
