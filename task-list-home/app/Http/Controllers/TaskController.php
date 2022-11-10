<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('home')->with(['menu' => 'no']);
    }

    public function new()
    {
        return view('new');
    }
    
    public function current()
    {
        $tasks = DB::table('tasks')->get();
        return view('current')->with(['tasks' => $tasks]);
    }

    public function search()
    {
        return view('search');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:1",
        ],
        [
            'name.required'=> 'A new task name is required.', // custom message
         ]);
        $name = $request->input('name');  
        Task::create(['name' => $name]);
        return redirect(route('index'));
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            "search" => "required|min:1",
        ],
        [
            'search.required'=> 'Write something...', // custom message
         ]);
        $search = $request->input('search');
        $tasks = DB::table('tasks')->where('name', 'LIKE', "%$search%")->get();
        return view('show-search')->with(['tasks' => $tasks]);
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect(route('index'));
    }
}
