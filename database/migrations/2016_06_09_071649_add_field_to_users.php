<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function($table){
            $table->string('phone');
            $table->string('address');
            $table->string('date_start');
            $table->integer('department_id');
            $table->integer('active');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('date_start');
            $table->dropColumn('department_id');
            $table->dropColumn('active');
        });
    }
}
