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
    public function show( Todo $todo ){

        // the static function find will todo by its id ($todo)
        // With Route Model Binding [Todo $todo (as a parameter)] wed dont need this query
        // $todo = Todo::find($todo);

        return view('todos.show')->with('todo', $todo); 
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

    // edit a todo
    public function edit( Todo $todo ) {

        // $todo = Todo::find($todo);

        return view('todos.edit')->with('todo', $todo);

    }

    // update a todo
    public function update( Request $request, Todo $todo ) {

        $this->validate($request, [
            'todoTitle' => 'required',
            'todoDescription' => 'required',
        ]);

        // $todo = Todo::find($todo); // find todo with id $todo
        // update with form info [use input name]
        $todo->title = $request->get('todoTitle'); 
        $todo->description = $request->get('todoDescription'); 

        $todo->save();

        return redirect('/todos');

    }

    // delete a todo
    public function destroy( Todo $todo ) {

        // $todo = Todo::find($todo); // find todo with id $todo

        $todo->delete();

        return redirect('/todos');

    }

}
