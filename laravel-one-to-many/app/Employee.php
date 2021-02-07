<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'name',
    'lastname',
    'dateOfBirth',
  ];

  public function tasks() {
    return $this -> hasMany(Task::class);
  }
  // funzione dedicata per correlazione con location
  public function locations() {
    return $this -> belongsToMany(Location::class);
  }
}
