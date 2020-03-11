<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo; // Trait

class todosController extends Controller
{
    public function index() {

        // get all todos
        $todos = Todo::all();

        return view('todos.index', ['todos' => $todos]);//    method 1
       // return view('todos.index')->with('todos', $todos); // method 2
       // return view('todos.index', compact('todos')); // method 3 variable name
    }

    // show single todo
    public function show( $todo ){

        // the static function find will todo by its id
        // $todo = Todo::find($todo);

        return view('todos.show')->with('todo', Todo::find($todo)); 
        // return view('todos.index')->with('todo', $todo); 
        // return $todo; returns todo in json format (just for test)
    }
}
