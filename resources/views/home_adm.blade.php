@extends('layouts.app')

@section('content')

    <div class="container-fluid base">
        <div class="row">
            <div class="col-md-5">
                <h3 class="name_mrgn">Вася Вася</h3>
            </div>
            <div class="col-md-3 col-md-offset-4">
                <h3 style="color: #7C7B7B">Учитель</h3>
                <hr class="hr_media_adm">
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="/img/admin.png" style="margin-bottom: 1.5%; width: 40%;" class="img-thumbnail"
                     alt="Cinque Terre" width="304" height="236">
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <div class="row" id="marg_top">

            <table class="table table-inverse table-hover">
                <thead>
                <tr class="nohover">
                    <th>Задача</th>
                    <th>Ученик</th>
                    <th>Удаление</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Помыть пол</td>
                    <td>Василий Помпеевич</td>
                    <td>
                        <!--<input style="margin-right: 4px; width: 150px;" type="button" class="btn btn-warning" value="Изменить">--><input
                                type="button" style="width: 150px;" class="btn btn-danger" value="Удалить"></td>
                </tr>
                <tr>
                    <td>Спроектировать сапог</td>
                    <td>Олег Еврентьев</td>
                    <td>
                        <!--<input style="margin-right: 4px; width: 150px;" type="button" class="btn btn-warning" value="Изменить">--><input
                                type="button" style="width: 150px;" class="btn btn-danger" value="Удалить"></td>
                </tr>
                <tr>
                    <td>Убить жука</td>
                    <td>Николай Пенсельвальскый</td>
                    <td>
                        <!--<input style="margin-right: 4px; width: 150px;" type="button" class="btn btn-warning" value="Изменить">--><input
                                type="button" style="width: 150px;" class="btn btn-danger" value="Удалить"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <p id="marg_top">Создать задачу:</p>
        <div class="row">
            <div class="col-xs-12 col-md-3 col-lg-3">
                <select class="form-control">
                    <option>Василий Помпеевич</option>
                    <option>Олег Еврентьев</option>
                    <option>Николай Пенсельвальскый</option>
                </select>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7">
                <form class="form-inline" role="form">
                    <div style="display: inline-block; font-weight: 500;">Задача:</div>
                    <input type="text" class="form-control" placeholder="Введите задачу">
                    <button type="button" class="btn btn-success">Добавить</button>
                </form>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection