<div class="app-list js-flickity"
     data-flickity-options='{"freeScroll": true, "wrapAround": true, "pageDots": false}'>
    @foreach ($apps as $app)
        <a class="app panel" href="/app/{{ $app['package'] }}">
            <img class="icon" src="{{ $app['icon'] }}">
            <div class="name">{{ $app['name'] }}</div>
            @include('parts.rate', ['rate' => $app['rate']])
        </a>
    @endforeach
</div>