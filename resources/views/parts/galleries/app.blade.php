<div class="app-list js-flickity"
     data-flickity-options='{"freeScroll": true, "wrapAround": true, "pageDots": false}'>
    @foreach ($apps as $app)
        <a class="app panel" href="/app/{{ $app['package'] }}">
            <img class="icon" src="{{ $app['icon'] }}">
            <div class="name">{{ $app['name'] }}</div>
            <div class="rate" data-rate="{{ $app['rate'] }}">
                <div class="rate-background">
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                </div>
                <div class="rate-value">
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                    <i class="mdi-action-grade"></i>
                </div>
            </div>
        </a>
    @endforeach
</div>