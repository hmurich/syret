@extends('front.layout')

@section('title', $title)

@section('content')
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">{{ $title }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>Введите email и пароль для входа: </h2>
                    <form action="{{ action('Front\LoginController@postLogin') }}" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name='email' required>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" id="password" name='password' required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>Регистрация: </h2>
                    <p>If you painter you painter</p>
                    <a href='{{ action('Front\RegistrationController@getIndex') }}' class="btn btn-default">Художник</a>
                    <p>If you painter you painter</p>
                    <a href='{{ action('Front\RegistrationController@getIndex') }}' class="btn btn-default">Художник</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
