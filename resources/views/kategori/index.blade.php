@extends('layouts.app')

@section('subtitle', 'Kategori')

@section('content_header_title', 'Home')

@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div></div> <!-- spacer untuk menggeser tombol ke kanan -->
                    <a class="btn btn-success" href="{{ url('/kategori/create') }}">+ Add Kategori</a>
                </div>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
