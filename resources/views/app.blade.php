@extends('layouts.master')

@section('title', $name . ' - LibreApps')

@section('main')
<div id="app-main">
    <div class="container">
        <header>
            <img class="icon" src="{{ $icon }}">
            <div class="text">
                <h1 class="name">{{ $name }} <small>{{ $version }}</small></h1>
                <div class="developer-info">By {{ $developer }}, since {{ $start }}. Use <a href="{{ $license_url }}">{{ $license }}</a>.</div>
                <div class="review-info">
                    @include('parts.rate', ['rate' => $rate])
                    <span class="review-count">{{ count($reviews) }} reviews</span>
                </div>
                <button class="btn btn-primary btn-raised" title="Install through your package manager">Install Package</button>
                <a class="btn btn-default btn-raised" title="Download general binary package">Download</a>
                <a class="btn btn-default btn-raised" title="Download source code">Source Code</a>
            </div>
        </header>
    </div>
</div>

@endsection