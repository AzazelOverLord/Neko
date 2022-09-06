@extends('layouts.aut')


@section('content')
    <div class="px-3">
        <div class="media">
            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="55" alt="logo" class="my-3"></a>
            <div class="media-body ml-3 align-self-center">
                <h4 class="mt-0 mb-1">Восстановление</h4>
            </div>
        </div>

        <form class="form-horizontal my-4" action="{{ route('password.update') }}" method="POST">
            @csrf




            <div class="form-group">
                <label for="username">{{ __('Почта') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email-open-outline font-16"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>



            <div class="form-group">
                <label for="username">{{ __('Пароль') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-key font-16"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="username">{{ __('Подтвердите пароль') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-key font-16"></i></span>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group mb-0 row">
                <div class="col-12 mt-2">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Авторизироваться<i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection





