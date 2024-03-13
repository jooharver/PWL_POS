@extends('layouts.app')
{{-- @extends('adminlte::page') --}}

@section('subtitle','Welcome')
@section('content_header_title','Home')
@section('content_header_subtitle','Welcome')

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@push('css')
    {{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}
@endpush

@push('js')
    {{-- <script type="text/javascript" src="/js/app.js"></script> --}}
    <script>console.log("Hi, im using the Laravel-AdmiLTE package!");</script>
@endpush