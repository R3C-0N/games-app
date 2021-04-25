@extends('layouts.template')
@section('title', 'Home')


@section('content')
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            @include('layouts.gamecard')
        </div>
    </div>
@endsection
