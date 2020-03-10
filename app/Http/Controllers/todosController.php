<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo; // Trait

class todosController extends Controller
{
    public function index() {

        // get all todos
        $todos = Todo::all();

        return view('todos.todos', ['todos' => $todos]);//    method 1
       // return view('todos.todos')->with('todos', $todos); // method 2
       // return view('todos.todos', compact('todos')); // method 3 variable name
    }
}
