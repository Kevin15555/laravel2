@extends('layout')

@section('title', 'Konfirmasi Export')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Konfirmasi Export</h2>

    <div class="card shadow-sm">
        <div class="card-body text-center">
            <p>Apakah kamu yakin ingin mengekspor data NPD sekarang?</p>

            <div class="d-flex justify-content-center gap-2 mt-3">
                <a href="{{ url('/npd/export/download') }}" class="btn btn-secondary">Ya, Export</a>
                <a href="{{ url('/npd/export') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </div>
    </div>
</div>
@endsection
