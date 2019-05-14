<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_info', function(Blueprint $table) {
		    $table->increments('id');
		    $table->string('user_id', 255);     // ユーザID(登録時のEMAIL ADDRESS
		    $table->string('image_id', 255)->nullable();// 登録した画像のID image_id
            $table->text('description')->nullable(); // ユーザの説明
            $table->string('user_name_sei_kanji', 16); // 姓(漢字)　必須　16byte string user_name_sei_kanji
            $table->string('user_name_mei_kanji', 16); // 名(漢字)　必須　16byte string user_name_mei_kanji
            $table->string('user_name_sei_kana', 16)->nullable();// 姓(かな)　　　　16byte string user_name_sei_kana
            $table->string('user_name_mei_kana', 16)->nullable();// 名(かな)　　　　16byte string user_name_mei_kana
            $table->string('user_name_sei_roma', 32);// 姓(ローマ字)　必須　32byte string user_name_sei_roma
            $table->string('user_name_mei_roma', 32);// 名(ローマ字)　必須　32byte string user_name_mei_roma
            $table->string('user_name_nickname', 16)->nullable();// ニックネーム　　16byte string user_name_nickname
            $table->char('birthday_year', 4);// 生年月日(年)　必須　4byte char(4) birthday_year
            $table->char('birthday_month', 2);// 生年月日(月)　必須　2byte char(2) birthday_month
            $table->char('birthday_day', 2);// 生年月日(日)　必須　2byte char(2) birthday_day
            $table->char('sex_type', 1);// 性別　必須　1 char(1) sex_type
            $table->string('post_up', 4)->nullable();// 郵便番号(上)　4byte string post_up
            $table->string('post_low', 4)->nullable();// 郵便番号(下)　4byte string post_low
            $table->string('address_1', 8)->nullable();// ご自宅住所　都道府県　8byte string address_1
            $table->string('address_2', 8)->nullable();// ご自宅住所　市区町村　128byte string address_2
            $table->string('address_3', 8)->nullable();// ご自宅住所　番地　128byte string address_3
            $table->string('address_4', 8)->nullable();// ご自宅住所　建物　64byte string address_4
            $table->string('address_5', 8)->nullable();// ご自宅住所　先様　64byte string address_5
            $table->char('home_type', 1)->nullable();// 住居タイプ　char(1) home_type
            $table->unsignedInteger('home_year')->nullable();// 住居築年数　unsignedInteger home_year
            $table->string('home_tel', 15)->nullable();// 電話番号　15byte string home_tel
            $table->string('home_mobile', 15)->nullable();// 携帯番号　15byte string home_mobile
            $table->string('home_fax', 15)->nullable();// ファックス　15byte string home_fax
            $table->string('home_pc_email', 255)->nullable();// パソコンメールアドレス　255byte string home_pc_email
            $table->string('home_mobile_email', 255)->nullable();// 携帯メールアドレス　255byte string home_mobile_email
            $table->string('bank_name', 64)->nullable();// 銀行名　64byte string bank_name
            $table->string('bank_branch', 64)->nullable();// 支店名　64byte string bank_branch
            $table->char('bank_type_account', 1)->nullable();// 口座種別　char(1) bank_type_account
            $table->string('bank_account_number', 10)->nullable();// 口座番号　10byte string bank_account_number
            $table->string('bank_account_name', 64)->nullable();// 口座名義　64byte bank_account_name
            $table->string('memorial_day', 255)->nullable();// 記念日　255byte memorial_day
            $table->char('system_expiration_date_year', 4)->nullable();// 有効期限(年)　4byte char system_expiration_date_year
            $table->char('system_expiration_date_month', 2)->nullable();// 有効期限(月)　2byte char system_expiration_date_month
            $table->char('system_expiration_date_day', 2)->nullable();// 有効期限(日)　2byte char system_expiration_date_day
            $table->char('system_join_time_year', 4)->nullable();// 入会日(年)　4byte char system_join_time_year
            $table->char('system_join_time_month', 2)->nullable();// 入会日(月)　2byte char system_join_time_month
            $table->char('system_join_time_day', 2)->nullable();// 入会日(日)　2byte char system_join_time_day
            $table->char('system_withdrawal_time_year', 4)->nullable();// 退会日(年)　4byte char system_withdrawal_time_year
            $table->char('system_withdrawal_time_month', 2)->nullable();// 退会日(月)　2byte char system_withdrawal_time_month
            $table->char('system_withdrawal_time_day', 2)->nullable();// 退会日(日)　2byte char system_withdrawal_time_day
            $table->string('credit_card_sei', 64)->nullable();// クレジットカード　名義人（姓）　64byte credit_card_sei
            $table->string('credit_card_mei', 64)->nullable();// クレジットカード　名義人（名）　64byte credit_card_mei
            $table->string('credit_card_post', 10)->nullable();// クレジットカード　郵便番号　10byte credit_card_post
            $table->string('credit_card_country', 128)->nullable();// クレジットカード　国　128byte credit_card_country
            $table->string('credit_card_birthday_year', 4)->nullable();// クレジットカード　名義人（生年月日　年）　4byte char credit_card_birthday_year
            $table->string('credit_card_birthday_month', 2)->nullable();// クレジットカード　名義人（生年月日　月）　2byte char credit_card_birthday_month
            $table->string('credit_card_birthday_day', 2)->nullable();// クレジットカード　名義人（生年月日　日）　2byte char credit_card_birthday_day
            $table->string('credit_card_number_1', 4)->nullable();// クレジットカード番号１桁目　4byte char credit_card_number_1
            $table->string('credit_card_number_2', 4)->nullable();// クレジットカード番号２桁目　4byte char credit_card_number_2
            $table->string('credit_card_number_3', 4)->nullable();// クレジットカード番号３桁目　4byte char credit_card_number_3
            $table->string('credit_card_number_4', 4)->nullable();// クレジットカード番号４桁目　4byte char credit_card_number_4
            $table->char('credit_card_expiration_month', 2)->nullable();// クレジットカード有効期限（月）　2byte char 　credit_card_expiration_month
            $table->char('credit_card_expiration_year', 4)->nullable();// クレジットカード有効期限（年）　4byte char 　credit_card_expiration_year
            $table->string('credit_card_expiration_security_code', 8)->nullable();// クレジットカードセキュリティ番号　8byte string  credit_card_expiration_security_code
            $table->string('company_name', 256)->nullable();// 会社名　company_name 256 string
            $table->string('company_owner_name_sei_kanji', 16)->nullable();// 代表者名　姓(漢字)　16byte string company_owner_name_sei_kanji
            $table->string('company_owner_name_mei_kanji', 16)->nullable();// 代表者名　名(漢字)　16byte string company_owner_name_mei_kanji
            $table->string('company_owner_name_sei_kana', 16)->nullable();// 代表者名　姓(かな)　16byte string company_owner_name_sei_kana
            $table->string('company_owner_name_mei_kana', 16)->nullable();// 代表者名　名(かな)　16byte string company_owner_name_sei_kana
            $table->string('company_owner_name_sei_roma', 32)->nullable();// 代表者名　姓(ローマ字)　32byte string company_owner_name_sei_roma
            $table->string('company_owner_name_mei_roma', 32)->nullable();// 代表者名　名(ローマ字)　32byte string company_owner_name_sei_roma
            $table->string('company_profile_address_1', 8)->nullable();// 会社住所　都道府県　8byte string　company_profile_address_1
            $table->string('company_profile_address_2', 128)->nullable();// 会社住所　市区町村　128byte string company_profile_address_2
            $table->string('company_profile_address_3', 128)->nullable();// 会社住所　番地　128byte string company_profile_address_3
            $table->string('company_profile_address_4', 64)->nullable();// 会社住所　建物　64byte string company_profile_address_4
            $table->string('company_profile_tel', 12)->nullable();// 会社電話番号　12byte string company_profile_tel
            $table->string('company_profile_fax', 12)->nullable();// 会社ファックス　12byte string company_profile_fax
            $table->string('company_profile_dept', 128)->nullable();// 部署・部門名　128byte string company_profile_dept
            $table->string('company_profile_title', 128)->nullable();// 役職　128byte string company_profile_title
            $table->unsignedInteger('company_profile_seniority')->nullable();// 勤続年数　数値　unsignedInteger company_profile_seniority
            $table->char('delflg', 1); // 削除フラグ 必須 0:有効 1:削除;
            $table->timestamps(); // 必須
            $table->unique('user_id'); // 制約
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal_info');
	}

}
