@extends('layouts.app')

@section('content')

    <div class="container-fluid base">
        <h3 class="text-center">Форма регистрации</h3>
        <div class="row text-center mrgn_login">

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputLogin3" class="col-sm-2 control-label">Логин</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputLogin3" placeholder="Введите логин">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Почта</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Введите почту">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Введите пароль">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword4" class="col-sm-2 control-label">Проверка пароля</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="inputPassword4"
                               placeholder="Введите пароль ещё раз">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-success btn-group-justified">Зарегистрироваться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

