<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Location;
use App\Typology;

class TypologyController extends Controller
{
  // methods x Typologies
  public function typIndex() {
    $typs = Typology::all();
    return view('pages.typologies-index', compact('typs'));
  }
  public function typShow($id) {
    $typ = Typology::findOrFail($id);
    return view('pages.typology-show', compact('typ'));
  }
  public function typCreate() {
    $tasks = Task::all();
    $typs = Typology::all();
    return view('pages.typology-create', compact('tasks', 'typs'));
  }
  public function typStore(Request $request) {
    $data = $request -> all();
    Validator::make($data, [
            'name' => 'required|min:5|max:20',
            'desc' => 'required|min:5|max:200',
            'tasks' => 'required'
        ]) -> validate();
    // dd($data);
    $newTyp = Typology::create($data);
    $tasks = Task::findOrFail($data['tasks']);
    $newTyp -> tasks() -> attach($tasks);
    return redirect() -> route('typs-index');
  }
  // edit e update
  public function typEdit($id) {
    $tasks = Task::all();
    $typ = Typology::findOrFail($id);
    return view('pages.typology-edit',
      compact('typ', 'tasks')
    );
  }
  public function typUpdate(Request $request, $id) {
    $data = $request -> all();
    Validator::make($data, [
      'name' => 'required|min:5|max:20',
      'desc' => 'required|min:5|max:200',
      'tasks' => 'required'
    ]) -> validate();
    // dd($data);
    $typ = Typology::findOrFail($id);
    $typ -> update($data);
    if (array_key_exists('tasks', $data)) {
      $tasks = Task::findOrFail($data['tasks']);
      $typ -> tasks() -> sync($tasks);
    } else{
      $typ -> tasks() -> sync([]);
      // oppure
      // $tasks = [];
    }

    return redirect() -> route('typs-index');
  }
}
