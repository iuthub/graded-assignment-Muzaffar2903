<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Task;

class TaskController extends Controller
{

    public function getOne($id) {
        $task = Task::where('id',$id)->first();
        return view('todo.update', compact("task"));
    }

    public function getAll() {
        $tasks = Task::all();
        return view('todo.list', compact("tasks"));
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'newTask' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->with('message',"Error in input");
        }

        $task = new Task;
        $task->task = $request->newTask;
        $task->save();

        return redirect('/');
    }

    public function update(Request $request,$id) {
        $validator = Validator::make($request->all(), [
            'newTask' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->with('message',"Error in input");
        }

        $task = Task::where('id',$id)->update(['task'=>$request->newTask]);

        return redirect('/');
    }

    public function delete($id) {
        Task::findOrFail($id)->delete();
        return redirect('/')->with('message', "Task has been deleted");
    }
}
