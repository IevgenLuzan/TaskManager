@extends('layouts.app')

@section('content')
    <div class="container-fluid base">


        <div class="form-group task_panel text-center">
            <h3 class="col-md-12" style="color: #7C7B7B;">Создание новой задачи</h3>
            <div class="form-group col-md-12">
                <form>
                    <input type="text" class="form-control" value="" placeholder="Название задачи">
                    <input type="text" class="form-control" value="" placeholder="Описание задачи">
                </form>
            </div>
            <div class="form-group adm_task_btn">
                <button type="submit" class="btn btn-success btn-group-justified adm_task_btn_ext">Создать</button>
            </div>
        </div>

    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

