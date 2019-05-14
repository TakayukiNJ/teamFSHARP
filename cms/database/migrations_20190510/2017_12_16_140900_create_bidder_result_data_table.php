<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidderResultDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bidder_result_data', function(Blueprint $table) {
		    $table->increments('id');
            $table->string('user_id' ,255);        // ユーザID(登録時のEMAIL ADDRESS)
            $table->string('omikuji_id' ,8);  // おみくじのID
            $table->string('omikuji_sub_id' ,8); // おみくじのSUB_ID(一人で複数のおみくじの場合)
            $table->string('bidder_user_id');  // 落札者
            $table->unsignedInteger('price'); // 値段(落札時価格)
            $table->char('result', 1); // 当落の結果(1:当選、0:落選)
            $table->datetime('result_published');  // 結果日時
            $table->char('delflg', 1); // 削除フラグ;
            $table->timestamps();
            $table->unique(['user_id','omikuji_id','omikuji_sub_id']); // 主キー制約
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bidder_result_data');
	}

}
