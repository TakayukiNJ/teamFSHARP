<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMikujisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mikujis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',20); 
			$table->text('msg');
			$table->integer('price');
			$table->string('return_big');
			$table->string('return_small');
			$table->integer('amount_all'); 
			$table->integer('amount_big');
			$table->integer('amount_small');
			$table->dateTime('published');
			$table->dateTime('end_time');
			$table->boolean('delete_flg');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mikujis');
	}

}
