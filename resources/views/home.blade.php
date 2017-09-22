@extends('layouts.app')

@section('title', 'Index')

@push('css')
<link rel="stylesheet" href="{{ mix('/css/home.css') }}">
@endpush

@push('scripts')
<script src="{{ mix('/js/home.js') }}"></script>
@endpush

@section('content')
    <p>This is my body content.</p>
@endsection