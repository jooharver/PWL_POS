@extends('layouts.app')
{{-- @extends('adminlte::page') --}}

@section('subtitle', 'Kategori')

@section('content_header_title', 'Kategori')

@section('content_header_subtitle', 'Create')


@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
            </div>

            <form method="POST" action="../kategori">
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush