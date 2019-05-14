<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmikujiDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('omikuji_data', function(Blueprint $table) {
		    $table->increments('id');
            $table->string('user_id', 255); // ユーザID(登録時のEMAIL ADDRESS)
            $table->string('omikuji_id' ,8); // おみくじのID
            $table->string('omikuji_sub_id' ,8); // おみくじのSUB_ID(一人で複数のおみくじの場合)
            $table->string('status'); // ステータス(open:公開待ち process:公開中 bid:おみくじ判定中 close:受付終了)
            $table->string('participants'); // おみくじの最大当選人数
            $table->datetime('start_dt');  // 入札開始日
            $table->datetime('end_dt');  // 入札終了日
            $table->unsignedInteger('bidder_price'); // 固定入札金額
            $table->unsignedInteger('max_price'); // 最大入札金額
            $table->unsignedInteger('min_price'); // 最低入札金額
            $table->unsignedInteger('max_bid_participants'); // 最大入札人数
            $table->unsignedInteger('min_bid_participants'); // 最低入札人数
            $table->datetime('omikuji_published');  // おみくじ作成日
            $table->text('title');  // おみくじのタイトル
            $table->text('description');  // おみくじの説明
            $table->binary('gazou_img')->nullable(); // おみくじの画像
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
		Schema::drop('omikuji_data');
	}

}
