<?php

namespace App\Http\Controllers\Bitflyer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vision;
use Illuminate\Http\Request;

class BitflyerSupportController extends Controller {

	/**
	 * bitflyerを使用して支援を行う
	 * @param $user_id 送金者のユーザID
	 * @param $target_npo 対象となるNPO
	 * @param $amount 金額
	 */
	public function support() {

	    // bitflyerに対してAPIを発行し、出金を行う。
	    // 出金先はF#管理下のNPOであるから、
	    // 出金と同時に入金の伝票を作る
	    $article = [['no' => 1, 'date1' => "20180510", 'date2' => "20180510", 'npo_or_person' => "テストNPO", 'amount' => "100000", 'intermediary' => "BitFlyer" , 'hand_counting_material' => 500, 'suitable_for' => "送金"]];
	    return Response::json($article);
	}
}
