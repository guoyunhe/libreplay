@extends('layouts.master')

@section('title', $name . ' - LibreApps')

@section('main')
<div id="app-main">
    <div class="container">
        <div class="app-action">
            <div class="btn-group">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-lg fa-language"></i> English
                </a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">Franch | Français</a></li>
                    <li><a href="javascript:void(0)">German | Deutsch</a></li>
                    <li><a href="javascript:void(0)">Simple Chinese | 简体中文</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Translate New Language</a></li>
                </ul>
            </div>
            <a href="javascript:void(0)" title="Edit application data and translate"
               class="btn btn-warning btn-fab btn-raised mdi-editor-mode-edit"></a>
        </div>
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
                    <a class="btn btn-default" title="Download general binary package"
                       href="{{ $download_url }}">Download</a>
                </div>
            </div>
        </header>

        <h2 class="heading clearfix">
            <span class="heading-text">
                Screenshots
            </span>
            <a class="btn btn-info btn-sm pull-right" href="/app/{{$package}}/review">More</a>
            <a class="btn btn-info btn-sm pull-right">Upload</a>
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

        <h2>
            Reviews
        </h2>
        
        <div id="your-review" class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Your Review</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="review-title-input" class="col-sm-2 control-label">
                            Title
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="review-title-input"
                                   placeholder="A Brief Summary">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-rating-input" class="col-sm-2 control-label">
                            Rating
                        </label>
                        <div class="col-sm-10">
                            <div class="raty"></div>
                            <input type="hidden" id="review-rate-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-content-input" class="col-sm-2 control-label">
                            Content
                        </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="review-content-input"
                                      placeholder="What do you like? What can be improved?"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a class="cc-link" target="_blank"
                               href="https://creativecommons.org/licenses/by/4.0/">
                                <i class="cc cc-BY"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- #your-review -->
        
        <div id="review-list" class="list-group">
            @foreach($reviews as $review)
            <div class="review-item list-group-item">
                <div class="row-picture">
                    <img class="circle" src="{{ $review['user']['avatar']}}"
                         title="{{ $review['user']['name']}}">
                </div>
                <div class="row-content">
                    <div class="least-content">
                        <i class="mdi-action-thumbs-up-down"></i> {{ $review['vote']}}
                    </div>
                    <h4 class="list-group-item-heading">{{ $review['title']}}</h4>
                    <p>
                        @include('parts.rate', ['rate' => $review['rate']])
                    </p>
                    <p class="list-group-item-text">{{ $review['content']}}</p>
                    <div class="review-meta">
                        {{ $review['date']}}
                        <i class="mdi-action-thumb-up"></i>
                        <i class="mdi-action-thumb-down"></i>
                        <i class="mdi-content-report"></i>
                    </div>
                </div>
            </div>
            <div class="list-group-separator"></div>
            @endforeach
        </div>
        <a id="load-reviews-btn" class="btn btn-info" href="/app/{{$package}}/review">Load More</a>
        
        <h2>Description</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum mi. Suspendisse lacinia dui eu metus lobortis, sit amet ullamcorper lectus tempus. Vivamus rutrum turpis nec imperdiet condimentum. Nunc quam est, iaculis a tempus eu, scelerisque a purus. Sed porta risus sit amet ante fermentum, ut auctor arcu euismod. Maecenas pulvinar purus in nunc ultrices auctor. Fusce accumsan dui non vestibulum pharetra. Vivamus tempor metus felis, ac congue massa congue tincidunt. Pellentesque sed elementum ligula. Fusce iaculis maximus consequat.
        </p>
        <p>
            Suspendisse potenti. Sed dui metus, volutpat eu orci eu, sagittis aliquet lorem. Etiam finibus magna sapien, vel dignissim ipsum ullamcorper vitae. Suspendisse sed ante id nibh tempor ullamcorper. Mauris laoreet bibendum orci, dapibus congue erat feugiat eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eu tellus volutpat, laoreet ante sit amet, eleifend justo. Donec pretium dolor vitae mauris elementum volutpat. In hac habitasse platea dictumst. Pellentesque ultrices ultricies enim et tristique. Integer auctor leo ac nisl lacinia vulputate. Vivamus ullamcorper lorem mi, eu consectetur enim luctus dapibus.
        </p>
        <p>
            Pellentesque lacinia, risus eu condimentum ultricies, mauris velit feugiat nunc, quis cursus odio purus sit amet sapien. Proin congue felis a tortor commodo, id euismod justo tincidunt. Donec sed nibh fermentum, accumsan nibh vulputate, scelerisque elit. Phasellus sed rhoncus libero, sed ultricies enim. Ut sollicitudin eu sem non scelerisque. Morbi eget congue augue, a commodo sapien. Nunc felis ex, pellentesque et interdum et, iaculis gravida augue. Nam id enim lectus. Sed vestibulum nec leo quis maximus. Ut tempor, nulla eget tempus malesuada, urna augue eleifend tellus, pharetra ornare mauris sem varius erat. Duis convallis et urna non vehicula. Pellentesque eleifend pellentesque egestas. Maecenas justo justo, tincidunt at ornare luctus, dignissim ullamcorper neque. Aenean eget sem at turpis luctus tincidunt faucibus ut diam. Praesent non consectetur ligula. Integer euismod semper velit ac posuere.
        </p>
        <p>
            Integer consectetur vulputate sem, non efficitur augue vehicula ut. Vivamus et purus in eros hendrerit hendrerit non vitae turpis. Donec luctus volutpat nisi, vitae faucibus leo tincidunt vitae. Duis fermentum, dui et molestie ultricies, nisl mauris dignissim tortor, ac mattis lorem mi ut nunc. Cras velit odio, tincidunt eget molestie et, interdum nec lectus. Phasellus euismod non sapien nec ornare. Mauris in mi sed diam pretium semper non in nisl. Nulla consectetur urna neque. Etiam cursus lacus ullamcorper cursus imperdiet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <p>
            Praesent auctor ultricies felis. Duis at arcu nisi. In sit amet dui vel turpis lobortis pharetra. Donec augue tellus, blandit ut libero fringilla, porta vehicula quam. Curabitur porttitor arcu vitae erat pellentesque, ac varius leo venenatis. Nullam at justo eu est tempus lacinia eget in velit. Suspendisse potenti.
        </p>
        <br><br>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$project_url}}">Project Homepage</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$support_url}}">Support &amp; Help</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$bug_report_url}}">Report Bugs</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$source_code_url}}">Source Code</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$document_url}}">Document</a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="btn btn-default btn-lg btn-block" target="_blank"
                   href="{{$donate_url}}">Donate</a>
            </div>
        </div>
    </div><!-- .container -->
</div><!-- #app-main -->

@endsection