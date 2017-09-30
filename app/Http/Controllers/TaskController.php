<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller {

    /**
     * Отображение всех задач для всех пользователей, форма добавл. новой задачи(add())
     */
    public function index() {
	
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
	$this->validate($request, [
	    'name' => 'required|max:255',
	]);

	$request->user()->tasks()->create([
	    'name' => $request->name,
	]);

	return redirect('/index');
    }

    /**
     * перекидывает на втюху редактирования
     */
    public function getEdit() {
	return redirect('/');
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
