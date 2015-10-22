<div class="js-flickity"
     data-flickity-options='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true, "pageDots": false }'>
    @foreach ($reviews as $review)
        <div class="review">
            <div class="reivew-app panel">
                <div class="panel-body">
                    <a href="/app/{{ $review['app']['package'] }}">
                        <img class="icon" src="{{ $review['app']['icon'] }}">
                        <span class="name">{{ $review['app']['name'] }}</span>
                    </a>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <p class="header">
                        <img class="avatar" src="{{ $review['user']['avatar'] }}">
                        <span class="text">
                            <span class="username">{{ $review['user']['name'] }}</span>
                            <span class="rate">
                                @for ($i = 0; $i < $review['rate']; $i++)
                                    <i class="mdi-action-grade"></i>
                                @endfor
                            </span>
                            <span class="date">
                                {{ $review['date'] }}
                            </span>
                        </span>
                        <span class="vote">
                            <i class="mdi-action-thumbs-up-down"></i> {{ $review['vote'] }}
                        </span>
                    </p>
                    <p>{{ $review['content'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>