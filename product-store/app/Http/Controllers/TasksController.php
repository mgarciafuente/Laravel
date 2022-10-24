<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function show($name) {
        return view('tasks.index', ['taskname' => $name]);
    }

    public function store(Request $request) {
        $name = Request->input('name');
        return view('tasks.index', ['taskname' => $name]);

    }
}
