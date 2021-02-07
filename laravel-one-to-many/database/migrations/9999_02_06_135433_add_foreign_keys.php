<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // relazione employee e task
      Schema::table('tasks', function (Blueprint $table) {
        $table -> foreign('employee_id', 'task-employee')
        -> references('id')
        -> on('employees');
      });

      // relazione employee e location tramite tabella ponte
      Schema::table('employee_location', function (Blueprint $table) {
        $table -> foreign('employee_id', 'el-employee') //sta x employeelocation ma direzione employee
        -> references('id')
        -> on('employees');

        $table -> foreign('location_id', 'el-location') //sta x employeelocation ma direzione location
        -> references('id')
        -> on('locations');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //drop della tabella ponte
      Schema::table('employee_location', function (Blueprint $table) {
        $table -> dropForeign('el-location');
        $table -> dropForeign('el-employee');
      });
      //drop della relazione task-employee
      Schema::table('tasks', function (Blueprint $table) {
        $table -> dropForeign('task-employee');
      });
    }
}
