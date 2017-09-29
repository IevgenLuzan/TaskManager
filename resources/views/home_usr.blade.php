@extends('layouts.app')

@section('content')

    <div class="container-fluid base">
        <div class="row">

            <table class="table table-inverse table-hover">
                <thead>
                <tr class="nohover">
                    <th>Задачи</th>
                    <th>Руководитель</th>
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

