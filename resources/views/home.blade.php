@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <?php
                        //testaaaaaaaaaaa
                        Route::group(['middleware' => 'role:web-developer'], function() {
                            Route::get('/dashboard', function() {
                                return 'Добро пожаловать, Веб-разработчик';
                            });
                        });
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
