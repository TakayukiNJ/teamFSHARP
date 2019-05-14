<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportBitflyerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('support_bitflyer', function(Blueprint $table) {
            $table->increments('id');
            $table->string('date_time_1'); // 送金実行日時
            $table->string('date_time_2'); // 入金解決日時
            $table->string('user_id_from'); // 送金者（もしくは入金者）
            $table->string('user_id_to'); // 入金者（もしくは出金者）
            $table->string('amount1'); // 出金
            $table->string('amount2'); // 入金
            $table->text('description')->nullable(); // 摘要
            $table->string('apikey')->nullable(); // 付加情報1 Bitflyerとやり取りする為に必要な記号情報格納先(1～10)
            $table->string('shop_id')->nullable(); // 付加情報2
            $table->string('email')->nullable(); // 付加情報3
            $table->string('account_id')->nullable(); // 付加情報4
            $table->string('amount')->nullable(); // 付加情報5
            $table->string('auto_charge')->nullable(); // 付加情報6
            $table->string('name')->nullable(); // 付加情報7
            $table->string('external_transaction_id')->nullable(); // 付加情報8
            $table->string('status')->nullable(); // 付加情報9
            $table->string('tracking_id')->nullable(); // 付加情報10
            $table->string('auto_charge_price')->nullable(); // 付加情報10
            $table->string('mid')->nullable(); // 付加情報10
            $table->string('ask')->nullable(); // 付加情報10
            $table->string('bid')->nullable(); // 付加情報10
            $table->string('option0')->nullable(); // 付加情報10
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
		Schema::drop('npo_registers');
	}

}
