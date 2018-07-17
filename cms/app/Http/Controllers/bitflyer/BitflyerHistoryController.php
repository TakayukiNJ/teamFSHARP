<?php

namespace App\Http\Controllers\Bitflyer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vision;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BitflyerHistoryController extends Controller {

	/**
	 * ユーザIDに該当するbitflyerの支援の履歴をすべて取得し
	 * JSON形式で呼び出し元に返却する。
	 */
	public function getHistorySupportTo($user_id) {

	    // データベースアクセスして、出金の一覧を取得JSONで返却

	}

	/**
	 * ユーザIDに該当するbitflyerの支援を受けた履歴をすべて取得し
	 * JSON形式で呼び出し元に返却する。
	 */
	public function getHistorySupportFrom($user_id) {

        // データベースアクセスして、入金の一覧を取得JSONで返却

	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function transfer(Request $request, string $id)
    {
//        $id=$request->input('id');
		logger('id['. $id. ']');
		
        $query = DB::table('support_bitflyer');
	    $query -> where('id', $id)->where('description', '送金');

    	$data['collections'] = $query->get();

		$article = [[]];
		$cnt = 0;
        foreach ($data['collections'] as $d) {
        	$cnt++;
			$article = [[
				'no' => $cnt,
				'date1' => $d->date_time_1,
				'date2' => $d->date_time_2,
			    'npo_or_person' =>$d->user_id_to,
				'amount' => $d->amount1,
				'intermediary' => "BitFlyer",
				'hand_counting_material' => '0',
				'suitable_for' => $d->description,
			]];
        }
        
	    // JSON形式のファイルを返す
	    //$article = [['no' => 1, 'date1' => "20180510", 'date2' => "20180510", 'npo_or_person' => "テストNPO", 'amount' => "100000", 'intermediary' => "BitFlyer" , 'hand_counting_material' => 500, 'suitable_for' => "送金"]];
	    return Response()->json($article);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request, string $id)
    {
//        $id=$request->input('id');
		logger('id['. $id. ']');
		
        $query = DB::table('support_bitflyer');
	    $query -> where('id', $id)->where('description', '入金');

    	$data['collections'] = $query->get();

		$article = [[]];
		$cnt = 0;
        foreach ($data['collections'] as $d) {
        	$cnt++;
			$article = [[
				'no' => $cnt,
				'date1' => $d->date_time_1,
				'date2' => $d->date_time_2,
			    'npo_or_person' =>$d->user_id_from,
				'amount' => $d->amount2,
				'intermediary' => "BitFlyer",
				'hand_counting_material' => '0',
				'suitable_for' => $d->description,
			]];
        }
        
	    // JSON形式のファイルを返す
	    //$article = [['no' => 1, 'date1' => "20180510", 'date2' => "20180510", 'npo_or_person' => "テストNPO", 'amount' => "100000", 'intermediary' => "BitFlyer" , 'hand_counting_material' => 500, 'suitable_for' => "送金"]];
	    return Response()->json($article);
    }

}
