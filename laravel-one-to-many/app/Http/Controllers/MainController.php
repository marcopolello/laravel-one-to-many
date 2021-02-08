<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Location;
use App\Typology;

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
    $typs = Typology::all();
    return view('pages.task-show', compact('task', 'typs'));
  }
  public function taskCreate() {
    $emps = Employee::all();
    $typs = Typology::all();
    return view('pages.task-create', compact('emps', 'typs'));
  }
  public function taskStore(Request $request){
    $data = $request -> all();
    // dd($data);
    // Task::create($request -> all()); non si può perche non gli ho ancora associato l'id_employee
    $emp = Employee::findOrFail($data['employee_id']);
    // data è un array quindi vado a prendermi l'elemento selezionato dall'utente dentro all'array
    $task = Task::make($request -> all());
    $task -> employee() -> associate($emp);
    $task -> save();
    return redirect() -> route('tasks-index');
  }

  // methods x Locations
  public function locationIndex() {
    $locations = Location::all();
    return view('pages.locations-index', compact('locations'));
  }
  public function locationShow($id) {
    $location = Location::findOrFail($id);
    return view('pages.location-show', compact('location'));
  }

  // methods x Typologies
  public function typIndex() {
    $typs = Typology::all();
    return view('pages.typologies-index', compact('typs'));
  }
  public function typShow($id) {
    $typ = Typology::findOrFail($id);
    return view('pages.typology-show', compact('typ'));
  }
}
