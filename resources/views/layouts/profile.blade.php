@extends('layouts.app')
@section('titre')
    Détails Profil
@endsection
@section('content')
    <script>
        @if ($errors->has('old-password') || $errors->has('password'))
            window.onload = function() {
                $('#modalPassword').modal('show');

            }
        @endif
    </script>

    <div class="modal fade " id="modalPassword">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Changement de mot de passe </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/profile/{{ Auth::user()->id }}/changepass" method="post">
                        @csrf
                        <div class="row">


                            <div class="col-12 my-2">
                                <label for="old-password" class="fw-bold text-dark text-bold">Mot de passe actuel</label>
                                {{ Form::password('old-password', ['class' => 'form-control ' . ($errors->has('old-password') ? ' is-invalid' : ''), 'placeholder' => '', 'required' => 'required']) }}
                                {!! $errors->first('old-password', '<div class="invalid-feedback">:message</div>') !!}
                            </div>

                            <div class="col-12 text-start my-2">
                                <label for="" class="text-dark text-bold">Nouveau Mot De Passe</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password"
                                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&amp;*_=+-]).{8,12}$"
                                    title="Doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un symbole ( ! @ # $ % ^ &amp; * _ = + - )"
                                    minlength="8">
                                <small id="password" class="text-muted">
                                    <i class="fa-solid fa-circle-info text-italic me-1"></i>
                                    Définir un nouveau mot de passe spécifique à cette plateforme . Ce dernier doit contenir
                                    au moins une lettre majuscule, une lettre minuscule, un chiffre et un symbole ( ! @ # $
                                    % ^ &amp; * _ = + - )
                                </small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 text-start my-2">
                                <label for="" class="text-dark text-bold">Confirmer Mot De Passe</label>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&amp;*_=+-]).{8,12}$"
                                    title="Doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un symbole ( ! @ # $ % ^ &amp; * _ = + - )"
                                    minlength="8">
                                <small id="password" class="text-muted">
                                    <i class="fa-solid fa-circle-info text-italic me-1"></i>
                                    Confirmer le mot de passe précédemment saisi
                                </small>

                            </div>
                            <div class="col-12 my-2">
                                <button type="submit" class="btn btn-success text-white fw-bold w-100">Valider</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button class="text-white text-gradient text-bold btn btn-danger w-100 my-2 fw-bold"
                        data-bs-dismiss="modal">Annuler</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade " id="modalInfo">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Formulaire de Modification </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('editprofile', Auth::user()->id ) }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-12 my-2">
                                <label for="name" class="fw-bold">Nom et Prénoms</label>
                                {{ Form::text('name', old('name') ?? Auth::user()->name, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-12 my-2">
                                <label for="email" class="fw-bold">Email</label>
                                {{ Form::text('email', old('email') ?? Auth::user()->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-12 my-2">
                                <button type="submit" class="btn btn-success text-white fw-bold w-100">Valider</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button class="text-white text-gradient text-bold btn btn-danger w-100 my-2 fw-bold"
                        data-bs-dismiss="modal">Annuler</button>
                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center text-white">
            <h4 class="text-white">
                Information du profil
            </h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-12 my-2">
                    <strong>Nom et Prénoms :</strong>
                    <input type="text" class="form-control my-2" value="{{ Auth::user()->name ?? '-' }}" readonly>
                </div>
                <div class="col-md-6 col-12 my-2">
                    <strong>Email</strong>
                    <input type="text" class="form-control my-2" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="col-md-4 col-12 my-2">
                    <button class="btn btn-info text-white fw-bold w-100" data-bs-target="#modalPassword"
                        data-bs-toggle="modal"> <i class="fa fa-edit me-3"></i> Modifier Mot de
                        passe</button>
                </div>
                <div class="col-md-4 col-12 my-2">

                    <button class="btn btn-warning text-dark fw-bold w-100" data-bs-toggle="modal"
                        data-bs-target="#modalInfo"> <i class="fa fa-edit me-3"></i>Modifier
                        informations profil</button>
                </div>
                <div class="col-md-4 col-12 my-2">
                    <form action="/profile/{{ Auth::user()->id }}/delete" method="post">
                        @csrf
                        <button class="btn btn-danger text-white fw-bold w-100 show_confirm2"> <i
                                class="fa fa-trash me-3"></i> Supprimer mon compte </button>

                        <small class=""> <i class="fa-solid fa-circle-info text-italic me-2 "></i> Si vous n'avez
                            pas
                            encore effectué des opérations avec ce compte</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
