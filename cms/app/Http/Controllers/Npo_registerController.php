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
// 		$npo_registers = Npo_register::orderBy('proval', 'desc');

		return view('npo_registers.index', compact('npo_registers'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $npo_auth = Auth::user()->npo;
	   // if("" )
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
		
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $npo_auth = Auth::user()->npo;
        
		$rules = [
		    'npo_name' => 'required|string|unique:npo_registers,npo_name',
		    'title' => 'required',
		];
		
		$this -> validate($request, $rules);

		$npo_register->npo_name                = $request->input("npo_name"); // URL
		$npo_register->title                   = $request->input("title"); // NPOの名前
		// NPOの名前をヘッダーに表示
		if("" == $npo_auth){
            $npo_auth = $npo_register->npo_name;
            Auth::user()->where('id', $id_auth)->update([
                'npo' => $npo_register->title
            ]);
        }
        $npo_register->subtitle                = $request->input("subtitle"); // プロジェクトの名前
        // ここからmanagerまで必要？
        $npo_register->embed_youtube           = $request->input("embed_youtube");
        $npo_register->blue_card_title         = $request->input("blue_card_title");
        $npo_register->blue_card_body          = $request->input("blue_card_body");
        $npo_register->green_card_title        = $request->input("green_card_title");
        $npo_register->green_card_body         = $request->input("green_card_body");
        $npo_register->yellow_card_title       = $request->input("yellow_card_title");
        $npo_register->yellow_card_body        = $request->input("yellow_card_body");
        $npo_register->manager                 = $name_auth;
        $npo_register->member1                 = $name_auth;
        $npo_register->support_contents        = $request->input("support_contents");
        $npo_register->support_contents_detail = $request->input("support_contents_detail");
        $npo_register->support_amount          = "0";
        $npo_register->proval                  = "0";
        
        $npo_register->blue_card_title         = "プロジェクトの目的";
        $npo_register->blue_card_body          = "ご自由にご記載ください。";
        $npo_register->green_card_title        = "プロジェクト期間と詳細";
        $npo_register->green_card_body         = "ご自由にご記載ください。";
        $npo_register->yellow_card_title       = "寄付の使い道とリターン";
        $npo_register->yellow_card_body        = "プロジェクト運営費、広告費（リターンは必須ではございません。） ";
        $npo_register->support_contents        = "このページに名前を記載";
        $npo_register->support_contents_detail = new Carbon(Carbon::now()->addYear(1));;
        
        $npo_register->published               = new Carbon(Carbon::now()->addWeek(1));
        
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

		return view('npo_registers.show', compact('npo_register'));
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
		
		$rules = [
		  //  'npo_name' => 'required|unique:npo_registers,npo_name',
		    'title' => 'required | min:1 | max:55',
		];
		
		$this -> validate($request, $rules);
		
		$npo_register->title = $request->input("title");
        $npo_register->subtitle = $request->input("subtitle");
        
        $npo_register->embed_youtube = $request->input("embed_youtube");
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
            $member_edit_auth = $member."_auth"; // 権限を付けたいだけに変数を作成
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
                }
            }else{
                // メンバーがいなかったら、登録させない。
                \Validator::make(
                    [$member => $request[$member]],
                    [$member => 'mimes']
                )->validate();
            }
        }
        
        $npo_register->support_purpose = $request->input("support_purpose");
        $npo_register->support_contents = $request->input("support_contents");
        $npo_register->support_contents_detail = $request->input("support_contents_detail");
        $npo_register->support_amount = $request->input("support_amount"); // 寄付金額
        if ($npo_register->support_amount == $npo_register['support_amount']) {
            $npo_register->proval = 0;
        }
        $npo_register->support_price = $request->input("support_price"); // 目標金額
        
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
    // 	dd($currentPremierData[1]['status']);
    // 	$a = var_export(array_column($currentPremierData, 'status'));
    	$buyer_count = 0;
    	$currency_amount = 0;
    	for($array_count=0; $array_count<count($currentPremierData); $array_count++){
           $buyer_count++;
           $currency_amount = $currency_amount + $currentPremierData[$array_count]->status;
        }
        $data['buyer_data'] = $buyer_count;
        $data['currency_data'] = $currency_amount;
        
    	// NPOメンバーが画像を保存していれば、はめていく。
        for($i = 1; $i < 11; $i++){
            $member              = "member".$i;
            $personal_info       = "personal_info".$i;
            $currentUserInfo     = \DB::table('users')->where('name', $currentNpoInfo->$member)->first();
            if($currentUserInfo){
            	$currentPersonalInfo = \DB::table('personal_info')->where('user_id', $currentUserInfo->email)->first();
        	}else{
        	    $currentPersonalInfo = "";
        	}
        	
        	//連想配列に入れtBladeテンプレートに渡しています。
        	$data[$personal_info] = $currentPersonalInfo;
        }
        $data['npo_info'] = $currentNpoInfo;
        // dd($data);
        
        return view('npo.npo_landing_page', $data);
    }
    
    public function editing(string $npo_name)
    {
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
        $this->middleware('auth:api');
        
    // 	dd("a");
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
    
    public function payment(string $npo_name) {
        $this->middleware('auth');
        
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		$name_auth = Auth::user()->name;
		
        \Stripe\Stripe::setApiKey("sk_test_FoGhfwb6NnvDUnFHoeufcBss");
        
        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];
        
        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount"      => $currentNpoInfo->support_amount, // 課金額はココで調整
                "currency"    => "jpy",
                "description" => $currentNpoInfo->title,
                "source"      => $token
            ));
        } catch (\Stripe\Error\Card $e) {
            return view('/errors/503');
        }
        
        $currentNpoInfo->buyer++;
        $data['npo_info'] = $currentNpoInfo;
        $currentPersonalInfo = \DB::table('personal_info')->where('user_id', Auth::user()->email)->first();
        
        \DB::table('premier_data')->insert(
            [
            'user_id'     => Auth::user()->email,             // 誰が寄付したのかemailで管理
            'vision_id'   => $currentNpoInfo->npo_name,       // どのプロジェクトに寄付したのか
            'premier_id'  => 1,                               // 通常の寄付なら1、企業からの寄付なら2、企業からのプレミア寄付なら3
            'title'       => $currentNpoInfo->title,          // これは使わないかな。
            'status'      => $currentNpoInfo->support_amount, // いくら寄付したのか
            'published'   => new Carbon(Carbon::now()),       // これも使わなそうだけど一応
            'description' => $currentNpoInfo->subtitle,       // 寄付した時刻
            'delflg'      => 0,                                // 1だったら非表示
            'created_at'  => new Carbon(Carbon::now()),       // 寄付した時刻
            'updated_at'  => new Carbon(Carbon::now())       // 寄付した時刻
            ]
        );
        // サンクスメール送る...
        // return view('/thank_you_for_support');
        return back($data);
    }
}