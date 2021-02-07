<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Employee;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Location::class, 10)
      -> create()
      -> each(function($loc){
        $emps = Employee::inRandomOrder()
          -> limit(rand(1, 5)) //un limite di elementi presi casualmente
          -> get();
        $loc -> employees() -> attach($emps);
      });
    }
}
