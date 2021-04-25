<div class="card">
    <img src="{!! asset('images/'.$game->picture) !!}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{!! $game->name !!}</h5>
        <p class="card-text">{!! $game->description !!}</p>
        <a href="/game/{!! $game->url !!}" class="btn btn-primary">Jouer !</a>
    </div>
</div>
