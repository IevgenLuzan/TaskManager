@extends('layouts.app')

@section('content')
    <div class="container-fluid base">
        @if($tasks)

            <class="form-group task_panel text-center">
            <h3 class="col-md-12" style="color: #7C7B7B;">Редактирование задачи:</h3>
            <form action="{{route('delTask',['task'=> $tasks ->id ]) }}" method="POST">
                <div class="form-group col-md-12">

                    <h1 style="text-align: center"> {{$tasks->name}}</h1>
                    <p style="text-align: center">{{$tasks->description}}</p>
                </div>
                <div class="form-group adm_task_btn">
                    <button type="submit" class="btn btn-danger btn-group-justified adm_task_btn_ext">Точно удалить?</button>
                </div>
                {{csrf_field()}}
                {{ method_field('DELETE') }}

            </form>

    </div>
    @endif
    </div>

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        @include('common.errors')

    </div>
@endsection

