@extends('layouts.app')

@section('content')
    <div class="card  {{ \App\Http\Controllers\HomeController::cssDarkmode('bg-', 'dark', 'light') }} {{ \App\Http\Controllers\HomeController::cssDarkmode('text-', 'white', 'black') }}">
        <div class="card-header">
            {{ __('Bienvenue') }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ __('Lancez une partie dès maintenant') }}</h5>
            <p class="card-text">{{ __('Pour commencer à jouer, selectionner un jeu et lancez une partie !') }}</p>

            @guest
                <p class="card-text">{{ __('Si vous n\'êtes pas connectez c\'est pas grave mais vous devriez essayer !') }}</p>
            @endguest
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($games as $game)
        <div class="col">
            @include('layouts.gamecard')
        </div>
        @endforeach
    </div>
@endsection
