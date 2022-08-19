<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tasks = Todo::where('user_id', '=', FacadesAuth::user()->id)->get();
        return view('Item.index',compact('tasks'))->with('SlNO',1);
    }
    public function onCreate(){
        return view('Item.create');
    }
    public function store(Request $request)
    {
        Todo::create($request->all());
        return back();
    }
    public function edit($id)
    {
        $TodoItem = Todo::find($id); 
        return view('Item.edit',compact('TodoItem'));
    }
    public function update(Request $request)
    {
        //  return $request->all();
        Todo::find($request->id)->update($request->all());
        return redirect('/show-item');
    }
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return back();
    }
}
