@extends('layouts.admin')
@section('title', 'Pannello di controllo')
@section('page-title', 'Dashboard Amministrativa')
@section('content')
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-lg-4">
            <div class="card p-4 shadow-sm border-start border-primary border-4 bg-white">
                <h5 class="text-muted small text-uppercase fw-bold mb-1">Pratiche Totali</h5>
                <p class="h2 fw-bold mb-0 text-dark">1,248</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card p-4 shadow-sm border-start border-warning border-4 bg-white">
                <h5 class="text-muted small text-uppercase fw-bold mb-1">In Attesa di Verifica</h5>
                <p class="h2 fw-bold mb-0 text-dark">42</p>
            </div>
        </div>
    </div>
@endsection
