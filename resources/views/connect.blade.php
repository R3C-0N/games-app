@extends('layouts.template')
@section('title', 'Connect')


@section('content')
    <form>
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Addresse email</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Votre email ne sera pas partagé.</div>
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="InputPassword">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Se rappeler de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
@endsection
