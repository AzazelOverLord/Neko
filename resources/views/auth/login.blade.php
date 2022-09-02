@extends('layouts.aut')

@section('content')
    <div class="px-3">
        <div class="media">
            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="55" alt="logo" class="my-3"></a>
            <div class="media-body ml-3 align-self-center">
                <h4 class="mt-0 mb-1">Вход в панель администратора</h4>
                <p class="text-muted mb-0">Авторизируйтесь для продалжение.</p>
            </div>
        </div>

        <form class="form-horizontal my-4" action="{{ route('login') }}" method="POST">

            <div class="form-group">
                <label for="username">{{ __('Логин') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                    </div>
                    <input type="text" class="form-control" id="login" name="login" placeholder="{{ __('Введите логин') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="userpassword">{{ __('Пароль') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key font-16"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Введите пароль') }}" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group row mt-4">
                <div class="col-sm-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{ __('Запомнить меня') }}</label>
                    </div>
                </div>





                @if (Route::has('password.request'))
                    <a class="text-muted font-13" href="{{ route('password.request') }}">
                        <i class="mdi mdi-lock"></i>{{ __('Забыли пароль?') }}</a>
                    </a>
                @endif
            </div>

            <div class="form-group mb-0 row">
                <div class="col-12 mt-2">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Авторизироваться<i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection
