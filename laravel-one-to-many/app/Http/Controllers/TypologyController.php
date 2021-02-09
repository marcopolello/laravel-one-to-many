<?php

namespace App\Http\Controllers;

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
}
