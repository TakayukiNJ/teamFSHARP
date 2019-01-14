<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

use App\Npo_register;
use App;
use Illuminate\Http\Request;

class Npo_registerController extends Controller {
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['landing', 'pieces']]);
    }

	public function index()
	{
        $name_auth = Auth::user()->name;
		$npo_registers = Npo_register::orderBy('proval', 'desc')->where('manager', $name_auth)->paginate(10);

		return view('npo_registers.index', compact('npo_registers'))->with('message', 'Item created successfully.');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $npo_auth = Auth::user()->npo;
		return view('npo_registers/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$npo_register = new Npo_register();
		
	    $rules = [
            'title'         => 'required | min:1 | max:55',
	        'support_price' => 'digits_between:5,8',
	    ];
    	
        $this -> validate($request, $rules);
		
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $npo_auth  = Auth::user()->npo;
        
		$npo_register->npo_name                = ""; // URL
		$npo_register->title                   = $request->input("title"); // NPOの名前
		// NPOの名前をヘッダーに表示
		if("" == $npo_auth){
            $npo_auth = $npo_register->npo_name;
            Auth::user()->where('id', $id_auth)->update([
                'npo' => $npo_register->title
            ]);
        }
        $npo_register->subtitle                = $request->input("subtitle"); // プロジェクトの名前
        
        $npo_register->manager                 = $name_auth;
        $npo_register->member1                 = $name_auth;
        $npo_register->member1_twitter         = $name_auth."1";
        $npo_register->blue_card_title         = "プロジェクトの目的";
        $npo_register->blue_card_body          = "ご自由にご記載ください。";
        $npo_register->green_card_title        = "プロジェクト期間と詳細";
        $npo_register->green_card_body         = "ご自由にご記載ください。";
        $npo_register->yellow_card_title       = "寄付の使い道とリターン";
        $npo_register->yellow_card_body        = "プロジェクト運営費、広告費（リターンは必須ではございません。） ";
        $npo_register->support_contents        = "このページに名前を記載";
        $npo_register->support_contents_detail = new Carbon(Carbon::now()->addYear(1));;
        $npo_register->support_price           = $request->input("support_price"); // 目標金額
        $npo_register->support_amount          = "3000"; // 個人寄付額
        $npo_register->support_amount_gold     = "10"; // 法人寄付額
        $npo_register->support_price_gold      = "100000"; // 法人寄付額
        $npo_register->support_amount_pratinum = "1";       // 法人(プレミアム)寄付者上限数
        $npo_register->support_price_pratinum  = "1000000"; // 法人(プレミアム)寄付額
        $npo_register->proval                  = "0";
        
        $npo_register->save();

		return redirect()->route('npo_registers.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($npo_name)
	{
		$npo_register = Npo_register::find($npo_name);
		
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $this->middleware('auth:api');
        
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('id', $npo_name)->first();
        
        // dd($npo_name); // idを返している。
		//連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
        
        if($name_auth === $currentNpoInfo->manager){
    		return view('npo_registers.show', compact('npo_register'))->with('message', 'こちらは、Preview画面です。');
        }
        // member1~10の_twitterカラムに権限があれば見れる処理
        for($i = 1; $i < 11; $i++){
            // "member".$i."_twitter"がAuth::user()->nameに1が付いていたら、権限を持たす
            $member_auth = $name_auth."1";
            $check_auth  = "member".$i."_twitter";
            if($member_auth === $currentNpoInfo->$check_auth){
                return view('npo_registers.edit', $data);
            }
        }
        // これ以外だったら、errorを返す。
        return view('/errors/503');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $npo_name)
	{
		$npo_register = Npo_register::findOrFail($npo_name);
 		
//  		dd($request->support_amount);
 		
		$npo_register->npo_name      = $request->input("npo_name"); // URL
        $npo_register->support_price = $request->input("support_price"); // 目標金額
		$npo_register->proval = $request->input("proval"); // 1だったら公開
		if($npo_register->proval < 1){
    		$rules = [
                'title'                   => 'required | min:1 | max:55',
    		    'support_contents_detail' => 'date | after:tomorrow',
                'support_price'           => 'digits_between:5,8',
                'support_amount'          => 'required | digits_between:4,6', // 個人寄付の金額
                // 'support_price_gold'      => 'required | digits_between:5,7', // 企業寄付の金額
                // 'support_amount_gold'     => 'required | digits_between:1,2', // 企業寄付の定員数
                'support_price_pratinum'  => 'required | digits_between:6,8', // 企業（プラチナ）寄付の金額
    	        'support_amount_pratinum' => 'required | digits_between:1,2', // 企業（プラチナ）寄付の定員数
                'npo_name'                => 'alpha_dash',
    		];
		}else{
		    $rules = [
                'title'                   => 'required | min:1 | max:55',
    		    'support_contents_detail' => 'date | after:tomorrow',
    		    'support_amount'          => 'digits_between:3,6',
    	        'support_price'           => 'required | digits_between:5,8',
    	        'npo_name'                => 'required | alpha_dash',
    	    ];
    	}
        $this -> validate($request, $rules);
		
		if($npo_register->npo_name){
		    $npo_register->published = new Carbon(Carbon::now());
		}
		
		
		$npo_register->title             = $request->input("title");
        // $npo_register->subtitle          = $request->input("subtitle");
        $npo_register->embed_youtube     = $request->input("embed_youtube");
        $npo_register->blue_card_title   = $request->input("blue_card_title");
        $npo_register->blue_card_body    = $request->input("blue_card_body");
        $npo_register->green_card_title  = $request->input("green_card_title");
        $npo_register->green_card_body   = $request->input("green_card_body");
        $npo_register->yellow_card_title = $request->input("yellow_card_title");
        $npo_register->yellow_card_body  = $request->input("yellow_card_body");
        
        // メンバーには、サイトに登録済みの「ユーザー名」を入れてください。
        for($i = 1; $i < 11; $i++){
            $member           = "member".$i;
            $member_pos       = $member."_pos";
            $member_detail    = $member."_detail";
            $member_edit_auth = $member."_auth"; // 権限を付けたいだけに変数を作成（名前+1）
            $member_twitter   = $member."_twitter";
            $member_facebook  = $member."_facebook";
            $member_linkedin  = $member."_linkedin";
            $currentUserInfo  = \DB::table('users')->where('name', $request->input($member))->first();
            // dd($currentUserInfo);
            if($currentUserInfo){
                if($currentUserInfo->name == $request->input($member)){
                    $npo_register->$member          = $request->input($member);
                    $npo_register->$member_pos      = $request->input($member_pos);
                    $npo_register->$member_detail   = $request->input($member_detail);
                    $member_edit_auth               = $request->input($member_twitter);
                    $npo_register->$member_twitter  = $npo_register->$member.$member_edit_auth;
                    $npo_register->$member_facebook = $request->input($member_facebook);
                    $npo_register->$member_linkedin = $request->input($member_linkedin);
                }else{
                    // メンバーがいなかったら、登録させない。
                    \Validator::make(
                        [$member => $request[$member]],
                        [$member => 'mimes']
                    )->validate();
                }
            }
        }
        // スポンサー設定
        $npo_register->support_purpose = $request->input("support_purpose"); // 資金の使い道
        $npo_register->support_contents = $request->input("support_contents"); // 購入者への特典(リターン)
        $npo_register->support_contents_detail = $request->input("support_contents_detail"); // 特典有効期限
        $npo_register->support_amount = $request->input("support_amount"); // 寄付金額
        // if ($npo_register->support_amount == $npo_register['support_amount']) {
        //     $npo_register->proval = 0;
        // }
        // $npo_register->support_price = $request->input("support_price"); // 目標金額
        
        // $npo_register->support_purpose_gold = $request->input("support_purpose_gold");
        // $npo_register->support_contents_gold = $request->input("support_contents_gold");
        // $npo_register->support_contents_detail_gold = $request->input("support_contents_detail_gold");
        // $npo_register->support_amount_gold = $request->input("support_amount_gold");
        // $npo_register->support_price_gold = $request->input("support_price_gold");
        
        // $npo_register->support_purpose_crypto = $request->input("support_purpose_crypto");
        // $npo_register->support_contents_crypto = $request->input("support_contents_crypto");
        // $npo_register->support_contents_detail_crypto = $request->input("support_contents_detail_crypto");
        // $npo_register->support_amount_crypto = $request->input("support_amount_crypto");
        // $npo_register->support_price_crypto = $request->input("support_price_crypto");
        
        // $npo_register->support_purpose_pratinum = $request->input("support_purpose_pratinum");
        // $npo_register->support_contents_pratinum = $request->input("support_contents_pratinum");
        // $npo_register->support_contents_detail_pratinum = $request->input("support_contents_detail_pratinum");
        // $npo_register->support_amount_pratinum = $request->input("support_amount_pratinum");
        // $npo_register->support_price_pratinum = $request->input("support_price_pratinum");
        
        // $npo_register->body = $request->input("body");
        $npo_register->updated_at = new Carbon(Carbon::now());
        // $npo_register->proval = $request->input("proval");
        
        // if($npo_register->proval > 0){
        //     if($npo_register->support_price == 0){
        //         \Validator::make(
        //             ['support_price' => $request['support_price']],
        //             ['support_price' => 'mimes']
        //         )->validate();
        //         dd("a");// メンバーがいなかったら、登録させない。
        //         // \Validator::make(
        //         //     ['support_price' => $request['support_price']],
        //         //     ['support_price' => 'mimes']
        //         // )->validate();
        //     }
        //     if($npo_register->npo_name == ""){
        //         // \Validator::make(
        //         //     ['support_price' => $request['support_price']],
        //         //     ['support_price' => 'mimes']
        //         // )->validate();
        //         \Validator::make(
        //             ['npo_name' => $request['npo_name']],
        //             ['npo_name' => 'mimes']
        //         )->validate();
                
        //         // \Validator::make(
        //         //     ['npo_name' => $request['npo_name']],
        //         //     ['npo_name' => 'mimes']
        //         // )->validate();
        //     }
        // }
		$npo_register->save();
		// return view('npo.npo_landing_page', compact('npo_register'));

		return redirect()->route('npo_registers.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 
	public function destroy($id)
	{
		$npo_register = Npo_register::findOrFail($id);
		$npo_register->delete();

		return redirect()->route('npo_registers.index')->with('message', 'Item deleted successfully.');
	}
    
    public function landing(string $npo_name)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->email;
        
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
    	$currentNpoInfo     = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
    	$currentPremierData = \DB::table('premier_data')->where('vision_id', $npo_name)->get();
        // 何人がいくら寄付したのか表示
    	$buyer_count = 0;                     // 寄付した人は何人か
    	$currency_amount                 = 0; // 現在いくらか
    	$currency_amount_personal        = 0; // 個人寄付はいくらか         (premier_idが1の時)
    	$currency_amount_company         = 0; // 企業寄付はいくらか         (premier_idが2の時)
    	$currency_amount_company_premier = 0; // 企業プレミア寄付はいくらか (premier_idが3の時)
    	for($array_count=0; $array_count<count($currentPremierData); $array_count++){
            $buyer_count++;
            $currency_origin = $currentPremierData[$array_count]->status;
            $currency_amount += $currency_origin;
            if(1 == $currentPremierData[$array_count]->premier_id){
                $currency_amount_personal += $currency_origin;
            }else if(2 == $currentPremierData[$array_count]->premier_id){
                $currency_amount_company  += $currency_origin;
                // dd("a");
            }else if(3 == $currentPremierData[$array_count]->premier_id){
                $currency_amount_company_premier += $currency_origin;
            }
        }
        // if(0 != $buyer_count){
        $par = ($currency_amount / $currentNpoInfo->support_price) * 100; //指定値「現在いくらか」を最大値(目標値)で割った後、100を掛ける
        $parcentage = floor($par); // 切捨て整数化
        $data['parcentage']    = $parcentage;
        $data['buyer_data']    = $buyer_count;
        $data['currency_data'] = $currency_amount;
        $data['currency_data_personal'] = $currency_amount_personal;
        $data['currency_data_company'] = $currency_amount_company;
        $data['currency_data_company_premier'] = $currency_amount_company_premier;
        // }
        
    	// NPOメンバーが画像を保存していれば、はめていく。
        for($i = 1; $i < 11; $i++){
            $member              = "member".$i;
            $personal_info       = "personal_info".$i;
            $currentUserInfo     = \DB::table('users')->where('name', $currentNpoInfo->$member)->first();
        	$currentPersonalInfo = "";
            if($currentUserInfo){
            	$currentPersonalInfo = \DB::table('personal_info')->where('user_id', $currentUserInfo->email)->first();
        	}
        	//連想配列に入れtBladeテンプレートに渡しています。
        	$data[$personal_info] = $currentPersonalInfo;
        }
        
        $data['npo_info'] = $currentNpoInfo;
        
        return view('npo.npo_landing_page', $data);
    }
    
    // 公開をしている時（下のも同時に編集する必要あり）
    public function editing(string $npo_name)
    {
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $this->middleware('auth:api');
        
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		//連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
        
        if($name_auth === $currentNpoInfo->manager){
            return view('npo_registers.edit', $data);
        }
        // member1~10の_twitterカラムに権限があれば見れる処理
        for($i = 1; $i < 11; $i++){
            // "member".$i."_twitter"がAuth::user()->nameに1が付いていたら、権限を持たす
            $member_auth = $name_auth."1";
            $check_auth  = "member".$i."_twitter";
            if($member_auth === $currentNpoInfo->$check_auth){
                return view('npo_registers.edit', $data);
            }
        }
        // これ以外だったら、errorを返す。
        return view('/errors/503');
    }
    
    // 公開をしていない時（上のも同時に編集する必要あり）
    // npo_registers/{$id}/edit で開く。まだ公開していない時に使用
    public function edit(string $npo_name)
    {
		$npo_register = Npo_register::find($npo_name);
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $this->middleware('auth:api');
        
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('id', $npo_name)->first();
		//連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
        
        if($name_auth === $currentNpoInfo->manager){
            return view('npo_registers.edit', $data);
        }
        // member1~10の_twitterカラムに権限があれば見れる処理
        for($i = 1; $i < 11; $i++){
            // "member".$i."_twitter"がAuth::user()->nameに1が付いていたら、権限を持たす
            $member_auth = $name_auth."1";
            $check_auth  = "member".$i."_twitter";
            if($member_auth === $currentNpoInfo->$check_auth){
                return view('npo_registers.edit', $data);
            }
        }
        // これ以外だったら、errorを返す。
        return view('/errors/503');
    }
    
    public function payment(Request $request, string $npo_name) {
        $this->middleware('auth');
        
        $user_request_email = $request->stripeEmail;
        
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		//$name_auth = Auth::user()->name;
		
        \Stripe\Stripe::setApiKey("sk_test_FoGhfwb6NnvDUnFHoeufcBss");
        
        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];
        
        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount"      => $currentNpoInfo->support_amount*1.036+216, // 課金額はココで調整
                "currency"    => "jpy",
                "description" => $currentNpoInfo->title,
                "source"      => $token
            ));
        } catch (\Stripe\Error\Card $e) {
            return view('/errors/503');
        }
        $currentPremierData = \DB::table('premier_data')
            ->where('user_id', $user_request_email)
            ->where('vision_id', $npo_name)
            ->where('premier_id', 1)
            ->first();
        // user_idとvision_idとpremier_idで判別
        
        // Create a charge: this will charge the user's card
        // try {
        //     $charge = \Stripe\Charge::create(array(
        //         "amount"      => $currentNpoInfo->support_amount*1.036+216, // 課金額はココで調整
        //         "currency"    => "jpy",
        //         "description" => $currentNpoInfo->title,
        //         "source"      => $token
        //     ));
        // } catch (\Stripe\Error\Card $e) {
        //     return view('/errors/503');
        // }
        if($currentPremierData != null){
            \DB::table('premier_data')
                ->where('user_id', $user_request_email)
                ->where('vision_id', $npo_name)
                ->where('premier_id', 1)
                ->update([
                    'status'      => $currentPremierData->status + $currentNpoInfo->support_amount,
                    'participants'=> $currentPremierData->status + 1,
                    'updated_at'  => new Carbon(Carbon::now())
                ]
            );
        }else{
            \DB::table('premier_data')->insert(
                [
                'user_id'     => $user_request_email,             // 誰が寄付したのかemailで管理
                'vision_id'   => $npo_name,                       // どのプロジェクトに寄付したのかURLで管理
                'premier_id'  => 1,                               // 通常の寄付なら1、企業からの寄付なら2、企業からのプレミア寄付なら3
                'title'       => $currentNpoInfo->title,          // 寄付した団体名（これは使わないかな。）
                'status'      => $currentNpoInfo->support_amount, // いくら寄付したのか
                'published'   => new Carbon(Carbon::now()),       // これも使わなそうだけど一応
                'description' => $currentNpoInfo->subtitle,       // 寄付したプロジェクト名
                'participants'=> 1,                               // 購入回数
                'delflg'      => 0,                               // 1だったら非表示
                'created_at'  => new Carbon(Carbon::now()),       // 寄付した時刻
                'updated_at'  => new Carbon(Carbon::now())        // 寄付した時刻
                ]
            );
        }
         \DB::table('npo_registers')->where('npo_name', $npo_name)->update([
            'follower' => $currentNpoInfo->follower + $currentNpoInfo->support_amount, // いくら寄付したかの合計
            'buyer'    => $currentNpoInfo->buyer + 1 // 購入した数
        ]);
        // サンクスメール送る...
        // return view('/thank_you_for_support');
        return back();
    }
}