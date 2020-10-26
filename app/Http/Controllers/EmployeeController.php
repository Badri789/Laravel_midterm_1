<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {

        $employees = Employee::all();

        return view("employee_list")->with("employees", $employees);
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view("edit")->with("employee", $employee);
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
    }


}
