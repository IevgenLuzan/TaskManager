@extends('layouts.app')

@section('content')

    <div class="container-fluid base">
        <div class="row">
            <div class="col-md-5">
                <h3 class="name_mrgn">Петя Петя</h3>
            </div>
            <div class="col-md-3 col-md-offset-4">
                <h3 style="color: #7C7B7B">Ученик</h3>
                <hr class="hr_media_usr">
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="/img/user.png" style="margin-bottom: 1.5%; width: 40%;" class="img-thumbnail"
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
                    <th>Задачи</th>
                    <th>Учитель</th>
                    <!--                <th>Отчётность:</th>-->
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Помыть пол</td>
                    <td>Павел Венедиктович</td>
                    <!--                <td><input style="width: 150px" type="button" class="btn btn-info" value="Отписать"></td>-->
                </tr>
                <tr>
                    <td>Помыть пол ещё раз</td>
                    <td>Павел Венедиктович</td>
                    <!--                <td><input style="width: 150px" type="button" class="btn btn-info" value="Отписать"></td>-->
                </tr>
                <tr>
                    <td>Я вижу пятно</td>
                    <td>Павел Венедиктович</td>
                    <!--                <td><input style="width: 150px" type="button" class="btn btn-info" value="Отписать"></td>-->
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

