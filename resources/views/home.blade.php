@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($games as $game)
        <div class="col">
            @include('layouts.gamecard')
        </div>
        @endforeach
    </div>
@endsection
