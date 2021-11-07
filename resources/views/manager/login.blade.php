@section('title') Вход @endsection
@extends('layouts.empty')


@section('content')

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('home')}}" class="h1">Вход</a>
            </div>
            <div class="card-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Логин" id="login" name="login" value="{{old('login')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('login')
                        <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Пароль" name="password" id="password" value="{{old('password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Запомнить
                                </label>
                            </div>
                        </div>

                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">Отправить</button>
                        </div>

                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{route('forgot-password')}}">Забыли пароль</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center">Регистрация</a>
                </p>
            </div>

        </div>

    </div>
@endsection
