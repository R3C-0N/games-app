@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card {{ \App\Http\Controllers\HomeController::cssDarkmode('bg-', 'dark', 'light') }} {{ \App\Http\Controllers\HomeController::cssDarkmode('text-', 'white', 'black') }}">
                    <div class="card-header">{{ __('Réglages') }}</div>

                    <div class="card-body">

                        <form class="" method="POST" action="{{ route('settings.update') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Nom') }}</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ Auth::user()->name }}">
                                @error('name')
                                {!! html_entity_decode(\App\Http\Controllers\FormController::inputError('name', __('Choisissez un nouveau nom valide'))) !!}
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email }}">
                                    @error('email')
                                    {!! html_entity_decode(\App\Http\Controllers\FormController::inputError('email', __('Choisissez un nouvel email valide'))) !!}
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text password" id="passwordGroupPrepend">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill hidden" viewBox="0 0 16 16">
                                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                              <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                              <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                            </svg>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Mot de passe') }}">
                                    </div>
                                    @error('name')
                                    {!! html_entity_decode(\App\Http\Controllers\FormController::inputError('password', __('Choisissez un nouveau mot de passe valide'))) !!}
                                    @enderror
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

                        <form class="" method="POST" action="{{ route('settings.delete') }}">
                            @csrf
                            <div class="form-group">
                                <label for="passwordDel">{{ __('Mot de passe') }}</label>
                                <input type="password" class="form-control" id="passwordDel" name="passwordDel" placeholder="{{ __('Mot de passe') }}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="checkDel" name="checkDel" aria-label="{{ __('Checkbox de confirmation') }}">
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="textDel" name="textDel" aria-label="{{ __('Texte de la checkbox de confirmation') }}" placeholder="{{ __('Cocher et écrivez "Je confirme !"') }}" >
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
