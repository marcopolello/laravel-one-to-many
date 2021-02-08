<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'title',
    'desc',
    'priority',
  ];

  public function employee() {
    return $this -> belongsTo(Employee::class);
  }
  // public function employeeOnTasks() {
  //   return $this
  //   -> employee()
  //   -> where('employee_id', $employee_id)
  //   -> count() < 1;
  // }
  public function typologies() {
    return $this -> belongsTo(Typology::class);
  }

}
