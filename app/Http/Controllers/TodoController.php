<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['list'=>Todo::all()]);
    }
    public function saveTodo(Request $req)
    {
        //business logic
        //save data to the database

        print_r($req->all());
        $todoObj = new Todo();
        $todoObj -> title = $req->todo;
        $todoObj->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $todoObj=Todo::find($id);
        return view('edit',['data'=>$todoObj]);
    }

    public function updateTodo(Request $req)
    {
        $todoObj = Todo::find($req->id);
        $todoObj -> title = $req->todo;
        $todoObj->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $todoObj=Todo::find($id);
        $todoObj->delete();
        return redirect('/');
    }
}
