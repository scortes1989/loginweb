<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRrhhDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rrhh_discounts', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('client_id', false);
            $table->integer('contract_id', false);
            $table->integer('employee_id', false);
            $table->integer('type_id', false);
            $table->date('date');
            $table->integer('ammount', false);
            $table->integer('quotas', false);
            $table->text('description');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('rrhh_discounts');
    }
}
