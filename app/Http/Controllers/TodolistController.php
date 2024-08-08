<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodoListController extends Controller
{
    public function todo()
    {
        $todo_lists = TodoList::all();
        // dd($todo_lists);

        return view('todo.index', ['todo_lists' => $todo_lists]);
    }
}

