@section('title') Регистрация @endsection
@extends('layouts.empty')


@section('content')

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('home')}}" class="h1">Регистрация</a>
            </div>
            <div class="card-body">
                <form action="{{route('register-post')}}" method="POST"  >
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Логин" id="login" name="login" value="{{old('login')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('login')
                        <span style="display: block" id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span style="display: block" id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
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
                        <span style="display: block" id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Повторите пароль" name="repeat_password" id="repeat_password" value="{{old('repeat_password')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">Отправить</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
@endsection

