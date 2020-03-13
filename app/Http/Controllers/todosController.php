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

    // create a todo 
    public function create( ) {

        return view('todos.create');

    }


    public function store( Request $request) {

        // dd($request); display request info
        // diplay todo info
        // return $request->all();
        // return $request->input();
        // return $request->input('todoTitle');
        // return $request->todoTitle;
/* method 1
        $validatedData = $request->validate([
            'todoTitle' => 'required|unique:posts',
            'todoDescription' => 'required',
        ]);
 */

        $this->validate($request, [
            'todoTitle' => 'required|min:4',
            'todoDescription' => 'required|max:150',
        ]);


        $todo = new Todo(); // Todo Model instance
        // name in model = name in html input
        $todo->title = $request->todoTitle;
        $todo->description = $request->input('todoDescription');
        $todo->save();

        return redirect('/todos'); // redirect to todos page after saving

    }
}
