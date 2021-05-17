@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-{{ isset(Auth::user()->darkmode) && Auth::user()->darkmode ? 'dark' : 'light' }} {{ \App\Http\Controllers\HomeController::cssDarkmode('text-', 'white', 'black') }}">
                    <div class="card-header">{{ __('Réglages') }}</div>

                    <div class="card-body">

                        <form class="" method="POST" action="{{ route('settings.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Nom') }}</label>
                                <input type="text" class="form-control" id="name" placeholder="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <input type="password" class="form-control" id="password" placeholder="{{ __('Mot de passe') }}">
                                </div>
                            </div>
                            <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary" onclick="window.location = '{{ route('home') }}'">{{ __('Retour') }}</button>
                                <button type="button" class="btn btn-danger" onclick="window.location = '{{ route('settings') }}'">{{ __('Annuler') }}</button>
                                <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-header">{{ __('Suppression de compte') }}</div>
                    <div class="card-body">

                        <form class="" method="POST" action="{{ route('settings') }}">
                            @csrf
                            <div class="form-group">
                                <label for="passwordDel">{{ __('Mot de passe') }}</label>
                                <input type="password" class="form-control" id="passwordDel" placeholder="{{ __('Mot de passe') }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="{{ __('Checkbox de confirmation') }}">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="{{ __('Texte de la checkbox de confirmation') }}" placeholder="{{ __('Cocher et écrivez "Je confirme !"') }}" >
                            </div>
                            <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-warning">{{ __('Supprimer le compte') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
