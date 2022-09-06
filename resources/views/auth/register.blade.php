@extends('layouts.aut')




@section('content')
    <div class="px-3">
        <div class="media">
            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="55" alt="logo" class="my-3"></a>
            <div class="media-body ml-3 align-self-center">
                <h4 class="mt-0 mb-1">Регистрация</h4>
            </div>
        </div>

        <form class="form-horizontal my-4" action="{{ route('register') }}" method="POST">
            @csrf



            <div class="form-group">
                <label for="username">{{ __('Имя') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                    </div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="username">{{ __('Почта') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email-open-outline font-16"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Регистрация<i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection
