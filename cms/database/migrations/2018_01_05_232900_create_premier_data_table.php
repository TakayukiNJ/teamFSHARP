<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePremierDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('premier_data', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string('user_id', 255); // ユーザID(登録時のEMAIL ADDRESS)
		    $table->string('vision_id', 255); // VISIONのID
		    $table->string('premier_id' ,8); // 優待のID
		    $table->text('title');  // 優待のタイトル
		    $table->string('image_id', 255)->nullable(); // 優待の画像
		    $table->string('status'); // ステータス(open:公開待ち process:公開中 bid:おみくじ判定中 close:受付終了)
            $table->datetime('published');  // 優待作成日
            $table->text('description')->nullable();  // 説明
            $table->text('description_detail')->nullable();  // 説明詳細
            $table->unsignedInteger('participants')->nullable();  // 最大受付人数
            $table->string('start_dt')->nullable(); // 入札開始日
            $table->string('end_dt')->nullable(); // 入札開始日
            $table->unsignedInteger('bidder_price')->nullable(); // 確定優待販売金額
            $table->unsignedInteger('max_price')->nullable(); // 最大入札可能額
            $table->unsignedInteger('min_price')->nullable(); // 最低入札可能額
            $table->unsignedInteger('max_bid_participants')->nullable(); // 入札可能最大人数
            $table->unsignedInteger('min_bid_participants')->nullable(); // 入札有効最小人数
            $table->char('delflg', 1); // 削除フラグ
            $table->timestamps();
            $table->unique(['user_id','vision_id','premier_id']); // 主キー制約
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('premier_data');
	}

}
