<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisionDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vision_data', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string('user_id', 255); // ユーザID(登録時のEMAIL ADDRESS)
		    $table->string('vision_id' ,8); // VISIONのID
		    $table->string('vision_title', 255);  // VISIONのタイトル
		    $table->string('image_id', 255)->nullable(); // 画像ID
            $table->string('vision_status'); // ステータス(open:公開待ち process:公開中 bid:おみくじ判定中 close:受付終了)
            $table->datetime('vision_published');  // VISION作成日
            $table->text('vision_description');  // VISIONの説明
            $table->unsignedInteger('first_commitment_stage');  // 1st目標達成金額
            $table->unsignedInteger('second_commitment_stage');  // 2st目標達成金額
            $table->char('delflg', 1); // 削除フラグ
            $table->timestamps();
            $table->unique(['user_id', 'vision_id']); // 主キー制約
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vision_data');
	}

}
