<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TaskController extends Controller
{

    protected $name;
    protected $description;

    public function __construct()
    {

    }

    /**
     * Отображение всех задач для всех пользователей, форма добавл. новой задачи(add())
     */
    public function index()
    {
        $tasks = task::select(['id', 'name', 'description'])->get();

        $users = user::select(['id', 'name'])->get();
        // dump($tasks);
        return view('home_adm')->with(['tasks' => $tasks, 'users' => $users]);

    }

    /**
     * Определение роли юзера
     * @param User $user
     */
    public function role(User $user)
    {
        $tasks = task::select(['id', 'name', 'description'])->get();
        $users = user::select(['id', 'name'])->get();
        if ($user->role == 'student') {
            return view('home_usr')->with(['tasks' => $tasks, 'users' => $users]);
        } else {
            return view('home_adm')->with(['tasks' => $tasks, 'users' => $users]);
        }
    }

    /**
     * Отображение конкретной задачи с развернутой информацией, есть кнопки удалить(delete)/редактировать(edit)
     */
    public function TaskId($id)
    {
        $tasks = task::select(['id', 'name', 'description'])->where('id', $id)->first();
        // dump($tasks);
        return view('task_adm')->with(['tasks' => $tasks]);
    }

    /**
     * создание новой задачи
     */
    public function add()
    {
        return view('create_task');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|filled'
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'description' => $request - description,
        ]);

        return redirect('/');
    }

    /**
     * перекидывает на втюху редактирования
     */
    public function getEdit()
    {
    }

    /**
     * редактирование задачи в БД
     */
    public function postEdit()
    {

    }

    /**
     * удаление задачи
     */
    public function destroy()
    {

    }

    /**
     * отобр. всех задач конкретного юзера
     */
    public function usersTask()
    {

    }

    /**
     * задача выролнена
     */
    public function done()
    {

    }

}
