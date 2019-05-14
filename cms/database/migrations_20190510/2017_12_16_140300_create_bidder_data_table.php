<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidderDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bidder_data', function(Blueprint $table) {
		    $table->increments('id');
            $table->string('user_id', 255); // ユーザID(登録時のEMAIL ADDRESS)
            $table->string('omikuji_id' ,8); // おみくじのID
            $table->string('omikuji_sub_id' ,8); // おみくじのSUB_ID(一人で複数のおみくじの場合)
            $table->string('bidder_user_id', 8);  // 入札者
            $table->unsignedInteger('price'); // 値段(入札価格)
            $table->datetime('bidder_published');  // 入札日時
            $table->char('delflg', 1); // 削除フラグ
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
		Schema::drop('bidder_data');
	}

}
