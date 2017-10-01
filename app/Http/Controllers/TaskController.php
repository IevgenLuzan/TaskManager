<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
class TaskController extends Controller {

    /**
     * Отображение всех задач для всех пользователей, форма добавл. новой задачи(add())
     */
    public function index() {
        $tasks= task::select(['id','name','description','user_id'])->get();
        dump($tasks);
        return view('home_adm')->with(['tasks'=>$tasks]);

    }

    /**
     * Отображение конкретной задачи с развернутой информацией, есть кнопки удалить(delete)/редактировать(edit)
     */
    public function TaskId() {

    }

    /**
     * создание новой задачи
     */
    public function add() {

    }

    /**
     * перекидывает на втюху редактирования
     */
    public function getEdit() {
    }

    /**
     * редактирование задачи в БД
     */
    public function postEdit() {
	
    }

    /**
     * удаление задачи
     */
    public function destroy() {
	
    }

    /**
     * отобр. всех задач конкретного юзера
     */
    public function usersTask() {
	
    }

    /**
     * задача выролнена
     */
    public function done() {
	
    }

}
