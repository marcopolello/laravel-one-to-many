<?php

use Illuminate\Database\Seeder;
use App\Typology;
use App\Task;
class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Typology::class, 15)
      -> create()
      -> each(function($typ){
        $tasks = Task::inRandomOrder()
          -> limit(rand(1, 3)) //un limite di elementi presi casualmente
          -> get();
        $typ -> tasks() -> attach($tasks);
      });
    }
}
