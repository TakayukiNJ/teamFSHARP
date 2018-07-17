<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vision;
use Illuminate\Http\Request;

class BitflyerDepositController extends Controller {

	/**
	 * デポジットへの入金を処理する
	 */
	public function pushDeposit($user_id, $amount) {

	    // データベースアクセスして、出金の一覧を取得JSONで返却

	}

	/**
	 * デポジットからの出金を処理する
	 * BitflyerSupportControllerによって出金は処理される
	 */
	public function pullDeposit($user_id, $amount) {

        // データベースアクセスして、入金の一覧を取得JSONで返却

	}

	/**
	 * ユーザIDに対して、デポジットへの入出金履歴を取得
	 * JSON形式で呼び出し元に返却する。
	 */
	public function getHistory($user_id) {

	    // bitflyerに対してAPIを発行し、出金を行う。
	    // 出金先はF#管理下のNPOであるから、
	    // 出金と同時に入金の伝票を作る

	}
}
