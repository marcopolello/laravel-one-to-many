<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
  public function empIndex() {
    $emps = Employee::all();
    return view('pages.emps-index', compact('emps'));
  }
  public function empShow($id) {
    $emp = Employee::findOrFail($id);
    return view('pages.emp-show', compact('emp'));
  }
}
