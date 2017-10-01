@extends('layouts.app')

@section('content')
    <div class="container-fluid base">
    @if($tasks)

        <div class="form-group task_panel text-center">
            <h3 class="col-md-12" style="color: #7C7B7B;">Редактирование задачи:</h3>
            <div class="form-group col-md-12">
                <h1> {{$tasks->name}}</h1>
                <input type="text" class="form-control" value="{{$tasks->description}}">
            </div>
            <div class="form-group adm_task_btn">
                <button type="submit" class="btn btn-success btn-group-justified adm_task_btn_ext">Изменить</button>
            </div>
        </div>
    @endif
    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

