@extends('layouts.app')

@section('content')

    <div class="container-fluid ">

        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default base">
                    <div class=""><h3 class="text-center">Форма входа</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal mrgn_login" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="row mrgn_fck_right">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Почта</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
				    <strong>{{ $errors->first('email') }}</strong>
				</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Пароль</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
				    <strong>{{ $errors->first('password') }}</strong>
				</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mrgn_fck_right2">
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Запомнить меня
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-info btn-group btn-md">
                                            <i class="fa fa-btn fa-sign-in"></i> Войти
                                        </button>

                                        <a href="{{ url('/register') }}" class="btn btn-info btn-group btn-md">
                                            <i class="fa fa-btn fa-sign-in"></i> Регистрация
                                        </a>
                                        <br/>
                                        <a class="a" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
