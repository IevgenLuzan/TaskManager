<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_tasks_lists extends Model
{
    protected $fillable = ['user_id', 'task_id', 'condition'];
}
