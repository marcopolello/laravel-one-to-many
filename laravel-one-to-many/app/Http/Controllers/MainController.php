<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
  // methods x Employees
  public function empIndex() {
    $emps = Employee::all();
    return view('pages.emps-index', compact('emps'));
  }
  public function empShow($id) {
    $emp = Employee::findOrFail($id);
    return view('pages.emp-show', compact('emp'));
  }
  // methods x Tasks
  public function taskIndex() {
    $tasks = Task::all();
    return view('pages.tasks-index', compact('tasks'));
  }
  public function taskShow($id) {
    $task = Task::findOrFail($id);
    return view('pages.task-show', compact('task'));
  }
}
