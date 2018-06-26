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
		$npo_registers = Npo_register::orderBy('proval', 'desc')->paginate(10);
		
		return view('npo_registers.index', compact('npo_registers'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
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
    
		$rules = [
		    'npo_name' => 'required|unique:npo_registers,npo_name',
		    'title' => 'required',
		];
		$this -> validate($request, $rules);

		$npo_register->npo_name                = $request->input("npo_name");
		$npo_register->title                   = $request->input("title");
        $npo_register->subtitle                = $request->input("subtitle");
        
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
        
        $npo_register->blue_card_title         = "私たちのミッション";
        $npo_register->blue_card_body          = "自由にご記載ください。";
        $npo_register->green_card_title        = "活動内容";
        $npo_register->green_card_body         = "自由にご記載ください。";
        $npo_register->yellow_card_title       = "ファンクラブの特典";
        $npo_register->yellow_card_body        = "タイトルがファンクラブの特典の場合、期限のご記載もお願いします。(ファンクラブ特典は必須ではございません) ";
        $npo_register->support_contents        = "現在設定なし";
        $npo_register->support_contents_detail = "現在設定なし";
        
        $npo_register->published               = new Carbon(Carbon::now()->addWeek(1));
        // dd($npo_register->addMonth(1));
        // dd($npo_register->addMonth(7));
        
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
		    'title' => 'required',
		];
		$this -> validate($request, $rules);
                // 'item_name' => 'required|min:3|max:255',
                // 'item_number' => 'required | min:1 | max:3',
                // 'item_amount' => 'required | max:6',
                // 'published'   => 'required',
        
        // // //バリデーション:エラー
        // if ($validator->fails()) {
        //         return redirect('/')->withInput()->withErrors($validator);
        // }
        
		$npo_register->title = $request->input("title");
        $npo_register->subtitle = $request->input("subtitle");
        // $npo_register->url = $request->input("url");
        // $npo_register->code1 = $request->input("code1");
        // $npo_register->code2 = $request->input("code2");
        // $npo_register->code3 = $request->input("code3");
        // $npo_register->manager = $request->input("manager");
        $npo_register->embed_youtube = $request->input("embed_youtube");
        
        $npo_register->embed_youtube = $request->input("embed_youtube");
        $npo_register->blue_card_title   = $request->input("blue_card_title");
        $npo_register->blue_card_body    = $request->input("blue_card_body");
        $npo_register->green_card_title  = $request->input("green_card_title");
        $npo_register->green_card_body   = $request->input("green_card_body");
        $npo_register->yellow_card_title = $request->input("yellow_card_title");
        $npo_register->yellow_card_body  = $request->input("yellow_card_body");
        
        $npo_register->member1 = $request->input("member1");
        $npo_register->member1_pos = $request->input("member1_pos");
        $npo_register->member1_detail = $request->input("member1_detail");
        $npo_register->member1_twitter = $request->input("member1_twitter");
        $npo_register->member1_facebook = $request->input("member1_facebook");
        $npo_register->member1_linkedin = $request->input("member1_linkedin");
        
        $npo_register->member2 = $request->input("member2");
        $npo_register->member2_pos = $request->input("member2_pos");
        $npo_register->member2_detail = $request->input("member2_detail");
        $npo_register->member2_twitter = $request->input("member2_twitter");
        $npo_register->member2_facebook = $request->input("member2_facebook");
        $npo_register->member2_linkedin = $request->input("member2_linkedin");
        
        $npo_register->member3 = $request->input("member3");
        $npo_register->member3_pos = $request->input("member3_pos");
        $npo_register->member3_detail = $request->input("member3_detail");
        $npo_register->member3_twitter = $request->input("member3_twitter");
        $npo_register->member3_facebook = $request->input("member3_facebook");
        $npo_register->member3_linkedin = $request->input("member3_linkedin");
        
        $npo_register->member4 = $request->input("member4");
        $npo_register->member4_pos = $request->input("member4_pos");
        $npo_register->member4_detail = $request->input("member4_detail");
        $npo_register->member4_twitter = $request->input("member4_twitter");
        $npo_register->member4_facebook = $request->input("member4_facebook");
        $npo_register->member4_linkedin = $request->input("member4_linkedin");
        
        $npo_register->member5 = $request->input("member5");
        $npo_register->member5_pos = $request->input("member5_pos");
        $npo_register->member5_detail = $request->input("member5_detail");
        $npo_register->member5_twitter = $request->input("member5_twitter");
        $npo_register->member5_facebook = $request->input("member5_facebook");
        $npo_register->member5_linkedin = $request->input("member5_linkedin");
        
        $npo_register->member6 = $request->input("member6");
        $npo_register->member6_pos = $request->input("member6_pos");
        $npo_register->member6_detail = $request->input("member6_detail");
        $npo_register->member6_twitter = $request->input("member6_twitter");
        $npo_register->member6_facebook = $request->input("member6_facebook");
        $npo_register->member6_linkedin = $request->input("member6_linkedin");
        
        $npo_register->member7 = $request->input("member7");
        $npo_register->member7_pos = $request->input("member7_pos");
        $npo_register->member7_detail = $request->input("member7_detail");
        $npo_register->member7_twitter = $request->input("member7_twitter");
        $npo_register->member7_facebook = $request->input("member7_facebook");
        $npo_register->member7_linkedin = $request->input("member7_youtube");
        
        $npo_register->member8 = $request->input("member8");
        $npo_register->member8_pos = $request->input("member8_pos");
        $npo_register->member8_detail = $request->input("member8_detail");
        $npo_register->member8_twitter = $request->input("member8_twitter");
        $npo_register->member8_facebook = $request->input("member8_facebook");
        $npo_register->member8_linkedin = $request->input("member8_linkedin");
        
        $npo_register->member9 = $request->input("member9");
        $npo_register->member9_pos = $request->input("member9_pos");
        $npo_register->member9_detail = $request->input("member9_detail");
        $npo_register->member9_twitter = $request->input("member9_twitter");
        $npo_register->member9_facebook = $request->input("member9_facebook");
        $npo_register->member9_linkedin = $request->input("member9_linkedin");
        
        $npo_register->member10 = $request->input("member10");
        $npo_register->member10_pos = $request->input("member10_pos");
        $npo_register->member10_detail = $request->input("member10_detail");
        $npo_register->member10_twitter = $request->input("member10_twitter");
        $npo_register->member10_facebook = $request->input("member10_facebook");
        $npo_register->member10_linkedin = $request->input("member10_linkedin");
        
        $npo_register->support_purpose = $request->input("support_purpose");
        $npo_register->support_contents = $request->input("support_contents");
        $npo_register->support_contents_detail = $request->input("support_contents_detail");
        $npo_register->support_amount = $request->input("support_amount");
        if ($npo_register->support_amount == $npo_register['support_amount']) {
            $npo_register->proval = 0;
        }
        // $npo_register->support_price = $request->input("support_price");
        
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
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
    	$currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		//連想配列に入れtBladeテンプレートに渡しています。
    	$data['npo_info'] = $currentNpoInfo;
    	return view('npo.npo_landing_page', $data);
    }
    
    public function editing(string $npo_name)
    {
		$id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
    	
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		//連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
        return view('npo_registers.edit', $data);
    }
    
    public function edit_npopage(string $npo_name)
    {
    	
    	
    }
    

}
