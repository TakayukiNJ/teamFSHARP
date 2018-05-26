<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_data', function(Blueprint $table) {
		    $table->increments('id');
            $table->string('user_id', 255); // ユーザID(登録時のEMAIL ADDRESS)
            $table->string('image_id', 255); // 画像ファイル名そのもの
            $table->binary('image_data'); // 画像データ
            $table->char('delflg', 1); // 削除フラグ
            $table->timestamps();
            $table->unique(['user_id','image_id']); // 主キー制約
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('image_data');
	}

}
