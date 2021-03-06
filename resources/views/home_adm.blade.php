
@extends('layouts.app')

@section('content')

<div class="container-fluid base">
    <div class="row">
        <div class="col-md-5">
            <h3 class="name_mrgn">{{$user->name}}</h3>
        </div>
        <div class="col-md-3 col-md-offset-4">
            <h3 style="color: #7C7B7B">{{$user->email}}</h3>
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
        <h4 class="name_mrgn" style="color: #5e5e5e;">Все задачи учеников:</h4>
        <table class="table table-inverse table-hover">
            <thead>
                <tr class="nohover">
                    <th>Задача</th>
                    <th>Ученик</th>
                    <th>Состояние</th>
                    <th>Узнать больше</th>
                    <th>Облегчить участь</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->tasks as $task)

                <tr>
                    <td>{{$task->role}}</td>
                    <td>{{$user_task->user_id}}</td>
                    <td>{{$user_task->condition}}</td>
                    <td><a class="btn btn-primary" href="{{ route ('TaskId',['id'=>$user_task->id]) }}">Подробнее</a>
                    </td>
                    <td>
                        <!--<input style="margin-right: 4px; width: 150px;" type="button" class="btn btn-warning" value="Изменить">-->
                        <input type="button" style="width: 150px;" class="btn btn-danger" value="Удалить">
                    </td>
                </tr>

                @endforeach

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
                @foreach($users as $user)
                <option>{{$user->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="col-xs-12 col-md-7 col-lg-7">
            <form  action="{{ url('/set') }}"class="form-inline" role="form">
                {{ csrf_field() }}
                <div style="display: inline-block; font-weight: 500;">Задача:</div>
                <select class="form-control">
                    @foreach($tasks as $task)
                    <option>{{$task->name}}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-success">Добавить</button>
                <a href="/add" type="button" class="btn btn-success">Создать новую задачу</a>
            </form>
        </div>
    </div>
</div>

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

</div>
@endsection