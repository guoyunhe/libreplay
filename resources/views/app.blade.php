@extends('layouts.master')

@section('title', $name . ' - LibreApps')

@section('main')
<div id="app-main">
    <div class="container">
        <header class="app-header">
            <div class="app-icon"><img class="icon" src="{{ $icon }}"></div>
            <div class="app-info">
                <h1 class="name">{{ $name }} <small>{{ $version }}</small></h1>
                <div class="developer-info">{{ $developer }}, since {{ $start }}</div>
                <div class="license"><a href="{{ $license_url }}">{{ $license }}</a></div>
                <div class="review-info">
                    @include('parts.rate', ['rate' => $rate])
                    <span class="review-count">{{ count($reviews) }} reviews</span>
                </div>
                <div class="tags">
                    @foreach($tags as $tag_code => $tag_name)
                        <a class="label label-info" href="/tag/{{ $tag_code }}">{{ $tag_name }}</a>
                    @endforeach
                </div>
                <div class="brief-desc"><big>{{ $brief_desc }}</big></div>
                <div class="actions">
                    <a class="btn btn-primary" title="Install through your package manager"
                       href="{{ $install_uri }}">Install</a>
                    <a class="btn btn-default" title="Download general binary package">Download</a>
                    <a class="btn btn-default" title="Download source code">Source Code</a>
                </div>
            </div>
        </header>

        <h2 class="heading clearfix">
            <span class="heading-text">
                Screenshots
            </span>
            <a class="btn btn-info btn-sm pull-right" href="screenshot">View More</a>
            <a class="btn btn-info btn-sm pull-right" href="screenshot">Upload</a>
        </h2>
        <div class="screenshots js-flickity"
             data-flickity-options='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true}'>
            @foreach($screenshots as $screenshot)
                <div class="screenshot-item">
                    <img src="{{$screenshot}}"/>
                    <div class="text">
                        Image retouching and editing, free-form drawing, resizing, cropping and more...
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="heading clearfix">
            <span class="heading-text">
                Reviews
            </span>
            <a class="btn btn-info btn-sm pull-right" href="screenshot">View More</a>
        </h2>
    </div>
</div>

@endsection