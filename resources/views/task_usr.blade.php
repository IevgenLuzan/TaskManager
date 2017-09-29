@extends('layouts.app')

@section('content')

    <div class="container-fluid base">
        <div class="row task_panel text-center">
            <h3 style="color: #7C7B7B;">Задача:</h3>
            <h4 style="font-size: 14.5pt;">Побрить тапки</h4>
        </div>
        <div class="row text-center">
            <label>
                <h4>Комментарий к выполнению:</h4>
                <textarea class="form-control" rows="4"></textarea>
            </label>
            <div class="usr_task_btn">
                <button type="submit" class="btn btn-success btn-lg">Выполнить</button>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

