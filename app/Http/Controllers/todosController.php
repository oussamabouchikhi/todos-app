<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todos; // Trait

class todosController extends Controller
{
    function index() {

        // get all todos
        $todos = Todo::all();

       // return view('todos', ['todos', $todos]);    method 1
       // return view('todos')->with('todos', $todos); // method 2
        return view('todos', compact('todos')); // method 3 variable name
    }
}
