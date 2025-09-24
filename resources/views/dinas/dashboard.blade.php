@extends('layout')

@section('title', 'Dashboard Perjalanan')

@section('content')
<h2 class="mb-4">Dashboard Perjalanan</h2>
<div class="row">
    <div class="col-md-3">
        <a href="{{ url('/dinas/karyawan') }}" class="btn btn-primary w-100 p-3">
            <i class="bi bi-person"></i> Karyawan
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ url('/dinas/atasan') }}" class="btn btn-success w-100 p-3">
            <i class="bi bi-person-badge"></i> Atasan
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ url('/dinas/hrd') }}" class="btn btn-warning w-100 p-3">
            <i class="bi bi-people"></i> HRD
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ url('/dinas/keuangan') }}" class="btn btn-danger w-100 p-3">
            <i class="bi bi-cash"></i> Keuangan
        </a>
    </div>
</div>
@endsection
