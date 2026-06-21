@extends('layouts.admin')
@section('title', 'Mio Profilo')
@section('page-title', 'Impostazioni Profilo')
@section('content')
    <div class="card shadow-sm p-4 col-md-8 col-lg-6 bg-white">
        <form>
            <div class="form-group mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="profile-name" value="Operatore Amministrativo">
                    <label for="profile-name">Nome e Cognome</label>
                </div>
            </div>
            <div class="form-group mb-4">
                <div class="input-group">
                    <input type="email" class="form-control" id="profile-email" value="operatore@comune.it">
                    <label for="profile-email">Email Istituzionale</label>
                </div>
            </div>
            <button type="button" class="btn btn-primary px-4">Salva Modifiche</button>
        </form>
    </div>
@endsection
