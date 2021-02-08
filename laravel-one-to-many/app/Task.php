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
  public function check() {
    return $this -> employee() ->exists();
  }
  public function typologies() {
    return $this -> belongsTo(Typology::class);
  }

}
