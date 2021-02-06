<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Task::class, 20)
        ->make()
        ->each(function($task){
          // $emp = Employee::findOrFail(rand(1, 5)); prendo dipendente tra 1 e 5 partendo dall'id.
          $emp = Employee::inRandomOrder() -> first();
          //dd($emp); mi prende la prima entità casuale che deriva dal random
          $task -> employee() -> associate($emp);
          // associo l'entita employee(preso random) ad ogni(iesimo) task tramite l'id e salvo;
          $task -> save();
        });
    }
}
