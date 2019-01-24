<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Npo_register;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
        // ログイン不要で開きたいページはここに記入していく。
        $this->middleware('auth', ['except' => ['terms', 'privacy_policy', 'specified_commercial_transactions_law', 'npo_landing_page']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home/home/home_own_timeline');
        $id = Auth::user()->id;
        $user = Auth::user()->email;

        $query = DB::table('vision_data');
        $query -> where('user_id', $user);

        $data['collections'] = $query->get();

        foreach ($data['collections'] as $d) {
            $premier_query = DB::table('premier_data');
            $count = $premier_query -> where('vision_id', $d->vision_id)->count();
            if($count != 0) {
                $premier_collection_query = DB::table('premier_data')->where('vision_id', $d->vision_id);
                $d->premier_collection = $premier_collection_query->get();
            } else {
                $d->premier_collection = collect();
            }
//            logger(print_r($d));
//            logger(print_r('\r\n'));
        }
//        logger(print_r($data['collections']));

        $vision_data = DB::table('vision_data')->where('user_id', $user)->first();

/*        $premier_query = DB::table('premier_data');
        $count = $premier_query -> where('vision_id', $vision_data->vision_id)->count();
        if ($count != 0) {
            $premier_collection_query = DB::table('premier_data')->where('vision_id', $vision_data->vision_id);
            $data['collections'][0]->premier_collection = $premier_collection_query->get();
        } else {
            $data['collections']['premier_collection'] = '';
        }*/

        return view('home/home', $data)->with('id', $id)->with('user', $user);
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    
    public function specified_commercial_transactions_law()
    {
        return view('specified_commercial_transactions_law');
    }
    
    public function thank_you_for_support()
    {
        return view('thank_you_for_support');
    }

    public function edit()
    {
        return view('home/edit');
    }

    public function register()
    {
        return view('home/register');
    }

    // 自己紹介表示画面
    public function home_disp(Request $request)
    {
        $id=$request->input('id');
        $user=$request->input('user_id');
        return view('home/home_disp')->with('id', $id)->with('user', $user);
    }
    // 自己紹介登録入力画面
    public function home_register(Request $request)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->email;

        // 既に登録済のデータがあればそれを出力する
        $query = DB::table('personal_info')->where('user_id', $user)->first();

        // personal_infoが登録されているかどうかを取得する
        $count = DB::table('personal_info')->where('user_id', $user)->count();

        if ($count <> 0) {
            session(['param_user_name_sei_kanji' => $query->user_name_sei_kanji]);
            session(['param_user_name_mei_kanji' => $query->user_name_mei_kanji]);
            session(['param_user_name_sei_roma' => $query->user_name_sei_roma]);
            session(['param_user_name_mei_roma' => $query->user_name_mei_roma]);
            session(['param_sex_type' => $query->sex_type]);
            session(['param_birthday_year' => $query->birthday_year]);
            session(['param_birthday_month' => $query->birthday_month]);
            session(['param_birthday_day' => $query->birthday_day]);
            session(['param_image_id' => $query->image_id]);
            session(['param_bank_name' => $query->bank_name]);
            session(['param_bank_branch' => $query->bank_branch]);
            session(['param_bank_type_account' => $query->bank_type_account]);
            session(['param_bank_account_number' => $query->bank_account_number]);
            session(['param_bank_account_name' => $query->bank_account_name]);
            return view('home/home_register')
            ->with('id', $id)
            ->with('user', $user)
            ->with('user_name_sei_kanji', $query->user_name_sei_kanji)
            ->with('user_name_mei_kanji', $query->user_name_mei_kanji)
            ->with('user_name_sei_roma', $query->user_name_sei_roma)
            ->with('user_name_mei_roma', $query->user_name_mei_roma)
            ->with('sex_type', $query->sex_type)
            ->with('birthday_year', $query->birthday_year)
            ->with('birthday_month', $query->birthday_month)
            ->with('birthday_day', $query->birthday_day)
            ->with('bank_name', $query->bank_name)
            ->with('bank_branch', $query->bank_branch)
            ->with('bank_type_account', $query->bank_type_account)
            ->with('bank_account_number', $query->bank_account_number)
            ->with('bank_account_name', $query->bank_account_name)
            ->with('count', $count);
        } else {
            logger('次のIF条件判定とおった');
            session(['param_user_name_sei_kanji' => '']);
            session(['param_user_name_mei_kanji' => '']);
            session(['param_user_name_sei_roma' => '']);
            session(['param_user_name_mei_roma' => '']);
            session(['param_sex_type' => '']);
            session(['param_birthday_year' => '']);
            session(['param_birthday_month' => '']);
            session(['param_birthday_day' => '']);
            session(['param_image_id' => '']);
            session(['param_bank_name' => '']);
            session(['param_bank_branch' => '']);
            session(['param_bank_type_account' => '']);
            session(['param_bank_account_number' => '']);
            session(['param_bank_account_name' => '']);
            return view('home/home_register')
            ->with('id', $id)
            ->with('user', $user)
            ->with('user_name_sei_kanji', '')
            ->with('user_name_mei_kanji', '')
            ->with('user_name_sei_roma', '')
            ->with('user_name_mei_roma', '')
            ->with('sex_type', '')
            ->with('birthday_year', '')
            ->with('birthday_month', '')
            ->with('birthday_day', '')
            ->with('bank_name', '')
            ->with('bank_branch', '')
            ->with('bank_type_account', '')
            ->with('bank_account_number', '')
            ->with('bank_account_name', '')
            ->with('count', '');
        }
    }
    // 自己紹介登録確認画面
    public function home_register_confirm(Request $request)
    {

        $id = Auth::user()->id;
        $user = Auth::user()->email;
        $user_name_sei_kanji = $request->input('user_name_sei_kanji');
        $user_name_mei_kanji = $request->input('user_name_mei_kanji');
        $user_name_sei_roma  = $request->input('user_name_sei_roma');
        $user_name_mei_roma  = $request->input('user_name_mei_roma');
        $sex_type            = $request->input('sex_type');
        $birthday_year       = $request->input('birthday_year');
        $birthday_month      = $request->input('birthday_month');
        $birthday_day        = $request->input('birthday_day');
        $bank_name           = $request->input('bank_name');
        $bank_branch         = $request->input('bank_branch');
        $bank_type_account   = $request->input('bank_type_account');
        $bank_account_number = $request->input('bank_account_number');
        $bank_account_name   = $request->input('bank_account_name');

        // personal_infoが登録されているかどうかを取得する
        $count = DB::table('personal_info')->where('user_id', $user)->count();
        
        $validator = Validator::make($request->all(),[
            'user_name_sei_kanji' => 'string|between:1,16',
            'user_name_sei_roma' => 'string|between:1,32',
            'user_name_mei_kanji' => 'string|between:1,16',
            'user_name_mei_roma' => 'string|between:1,32',
            'sex_type' => 'required|string|between:1,1',
            'birthday_year' => 'string|between:4,4',
            'birthday_month' => 'string|between:1,2',
            'birthday_day' => 'string|between:1,2',
            'bank_name' => 'string|between:2,16',
            'bank_branch' => 'string|between:2,16',
            'bank_type_account' => 'string|between:1,1',
            'bank_account_number' => 'string|between:7,10',
            'bank_account_name' => 'string|between:2,64',
        ]);
        if ($validator->fails()){
            return view('home/home_register', compact('user'))
            ->with('id', $id)
            ->with('user', $user)
            ->with('user_name_sei_kanji', $user_name_sei_kanji)
            ->with('user_name_sei_roma', $user_name_sei_roma)
            ->with('user_name_mei_kanji', $user_name_mei_kanji)
            ->with('user_name_mei_roma', $user_name_mei_roma)
            ->with('sex_type', $sex_type)
            ->with('birthday_year', $birthday_year)
            ->with('birthday_month', $birthday_month)
            ->with('birthday_day', $birthday_day)
            ->with('bank_name', $bank_name)
            ->with('bank_branch', $bank_branch)
            ->with('bank_type_account', $bank_type_account)
            ->with('bank_account_number', $bank_account_number)
            ->with('bank_account_name', $bank_account_name)
            ->with('count', $count)
            ->withErrors($validator);
        } else {
            session(['param_user_name_sei_kanji' => $user_name_sei_kanji]);
            session(['param_user_name_mei_kanji' => $user_name_mei_kanji]);
            session(['param_user_name_sei_roma' => $user_name_sei_roma]);
            session(['param_user_name_mei_roma' => $user_name_mei_roma]);
            session(['param_sex_type' => $sex_type]);
            session(['param_birthday_year' => $birthday_year]);
            session(['param_birthday_month' => $birthday_month]);
            session(['param_birthday_day' => $birthday_day]);
            session(['param_bank_name' => $bank_name]);
            session(['param_bank_branch' => $bank_branch]);
            session(['param_bank_type_account' => $bank_type_account]);
            session(['param_bank_account_number' => $bank_account_number]);
            session(['param_bank_account_name' => $bank_account_name]);
            
            return view('home/home_register_confirm')
            ->with('id', $id)
            ->with('user', $user)
            ->with('image_id', asset('/images'). '/'. session('param_image_id'))
            ->with('user_name_sei_kanji', $user_name_sei_kanji)
            ->with('user_name_mei_kanji', $user_name_mei_kanji)
            ->with('user_name_sei_roma', $user_name_sei_roma)
            ->with('user_name_mei_roma', $user_name_mei_roma)
            ->with('sex_type', $sex_type)
            ->with('birthday_year', $birthday_year)
            ->with('birthday_month', $birthday_month)
            ->with('birthday_day', $birthday_day)
            ->with('bank_name', $bank_name)
            ->with('bank_branch', $bank_branch)
            ->with('bank_type_account', $bank_type_account)
            ->with('bank_account_number', $bank_account_number)
            ->with('bank_account_name', $bank_account_name)
            ;
        }
    }
    // 自己紹介登録実行画面
    public function home_register_process(Request $request)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->email;
        //$deleteRows = DB::table('personal_info')->where('user_id', $user)->delete();
        $data_tbl = [
            'user_id' => $user,
            'image_id' => session('param_image_id'),
            'user_name_sei_kanji' => session('param_user_name_sei_kanji'),
            'user_name_mei_kanji' => session('param_user_name_mei_kanji'),
            'user_name_sei_roma' => session('param_user_name_sei_roma'),
            'user_name_mei_roma' => session('param_user_name_mei_roma'),
            'sex_type' => session('param_sex_type'),
            'birthday_year' => session('param_birthday_year'),
            'birthday_month' => session('param_birthday_month'),
            'birthday_day' => session('param_birthday_day'),
            'bank_name' => session('param_bank_name'),
            'bank_branch' => session('param_bank_branch'),
            'bank_type_account' => session('param_bank_type_account'),
            'bank_account_number' => session('param_bank_account_number'),
            'bank_account_name' => session('param_bank_account_name'),
            'delflg' => '0'
            ];
        // personal_infoが登録されているかどうかを取得する
        $count = DB::table('personal_info')->where('user_id', $user)->count();
        if($count <> 0) {
            $cli = DB::table('personal_info')->where('user_id', $user)->update($data_tbl);
        } else {
            $cli = DB::table('personal_info')->insert($data_tbl);
        }

        return view('home/home_register_process')->with('id', $id)->with('user', $user);
    }
    // 自己紹介登録完了画面
    public function home_register_complete(Request $request)
    {
        $id=$request->input('id');
        $user=$request->input('user_id');
        return view('home/home_register_complete')->with('id', $id)->with('user', $user);
    }
    // ホーム画面自分のタイムライン
    public function home_own_timeline(Request $request)
    {
        $name     = Auth::user()->name;
        $id       = Auth::user()->id;
        $email    = Auth::user()->email;
        $auth_npo = Auth::user()->npo;
        
        // 新着情報を取得
        $data['npo_info_proval'] = \DB::table('npo_registers')->where('proval', 1)->orderBy('published', 'desc')->get();     
		// 寄付した団体を取得（個人）
		$premierData_personal = \DB::table('premier_data')->where('user_define', $email)->orderBy('updated_at', 'desc')->get();
		$data['premierData_personal'] = $premierData_personal;
		if($premierData_personal){
		    for($i = 0; $i < count($premierData_personal); $i++){
    		    $premierData_email = $premierData_personal[$i]->vision_id;
    		    $data['npo_info_personal'][$i] = \DB::table('npo_registers')->where('npo_name', $premierData_email)->first();
    		    //  = $premierData_personal[$i];
    		}
		}
		// 寄付した団体を取得（企業）
		$premierData_enterprise = \DB::table('premier_data')->where('user_define', $auth_npo)->orderBy('updated_at', 'desc')->get();
		$data['premierData_enterprise'] = $premierData_enterprise;
		if($premierData_enterprise){
		    for($i = 0; $i < count($premierData_enterprise); $i++){
    		    $premierData_npo = $premierData_enterprise[$i]->vision_id;
    		    $data['npo_info_enterprise'][$i] = \DB::table('npo_registers')->where('npo_name', $premierData_npo)->first();
    		}
		}
// 		$data['npo_info'] = Npo_register::orderBy('published', 'desc')->where('proval', 1)->paginate(3);
// 		return view('npo_registers.index', compact('npo_registers'))->with('message', 'Item created successfully.');
        // dd($data);
        // 用編集(データベースから取ってくる用に変更...)
        $user_name_sei_kanji = $request->input('user_name_sei_kanji');
        $user_name_mei_kanji = $request->input('user_name_mei_kanji');
        $user_name_sei_roma  = $request->input('user_name_sei_roma');
        $user_name_mei_roma  = $request->input('user_name_mei_roma');
        $sex_type            = $request->input('sex_type');
        $birthday_year       = $request->input('birthday_year');
        $birthday_month      = $request->input('birthday_month');
        $birthday_day        = $request->input('birthday_day');
        $bank_name           = $request->input('bank_name');
        $bank_branch         = $request->input('bank_branch');
        $bank_type_account   = $request->input('bank_type_account');
        $bank_account_number = $request->input('bank_account_number');
        $bank_account_name   = $request->input('bank_account_name');

        session(['user_name_sei_kanji' => $user_name_sei_kanji]);
        session(['user_name_mei_kanji' => $user_name_mei_kanji]);
        session(['user_name_sei_roma' => $user_name_sei_roma]);
        session(['user_name_mei_roma' => $user_name_mei_roma]);
        session(['sex_type' => $sex_type]);
        session(['birthday_year' => $birthday_year]);
        session(['birthday_month' => $birthday_month]);
        session(['birthday_day' => $birthday_day]);
        session(['bank_name', $bank_name]);
        session(['bank_branch', $bank_branch]);
        session(['bank_type_account', $bank_type_account]);
        session(['bank_account_number', $bank_account_number]);
        session(['bank_account_name', $bank_account_name]);
        // 要変更ここまで(2018.1.5)

        $image_id = '';
        $image    = '';

        $image = DB::table('image_data')->where('user_id', $email)->first();
        
        if($image){
            $image_id = $image->image_id; // $imageの中のimage_idを取得
            $image_id = asset('/images'). '/'. $image_id;
        } else {
            $image_id = '/img/contents/user-default.png';
        }

        return view('home/home_own_timeline', $data)
        ->with('id', $id)
        ->with('user', $email)
        //2018.1.4追加ここから
        ->with('image_id', $image_id)
        ->with('user_name_sei_kanji', $user_name_sei_kanji)
        ->with('user_name_mei_kanji', $user_name_mei_kanji)
        ->with('user_name_sei_roma', $user_name_sei_roma)
        ->with('user_name_mei_roma', $user_name_mei_roma)
        ->with('sex_type', $sex_type)
        ->with('birthday_year', $birthday_year)
        ->with('birthday_month', $birthday_month)
        ->with('birthday_day', $birthday_day)
        ->with('bank_name', $bank_name)
        ->with('bank_branch', $bank_branch)
        ->with('bank_type_account', $bank_type_account)
        ->with('bank_account_number', $bank_account_number)
        ->with('bank_account_name', $bank_account_name)
        ;
        //2018.1.4追加ここまで

        // return view('npo_landing_page', $data);

    }


    // ホーム画面自分のタイムライン(urlも自分の)
    public function home_own(Request $request)
    {
        $id = Auth::user()->id;
        //$name = Auth::user()->name;
        $user = Auth::user()->email;

        $currentUserInfo = \DB::table('users')->where('name', $request)->first();
//連想配列に入れtBladeテンプレートに渡しています。
        $user_data['user_info'] = $currentUserInfo;


//         // データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
//         $currentUserInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
// //連想配列に入れtBladeテンプレートに渡しています。
//         $data['npo_info'] = $currentNpoInfo;
//         // $data['subtitle'] = $currentNpoInfo;
//         return view('home/home_own_timeline', $data);

        $query = DB::table('main_omikuji_data');

        // 用編集(データベースから取ってくる用に変更...)
        $user_name_sei_kanji = $request->input('user_name_sei_kanji');
        $user_name_mei_kanji = $request->input('user_name_mei_kanji');
        $user_name_sei_roma  = $request->input('user_name_sei_roma');
        $user_name_mei_roma  = $request->input('user_name_mei_roma');
        $sex_type            = $request->input('sex_type');
        $birthday_year       = $request->input('birthday_year');
        $birthday_month      = $request->input('birthday_month');
        $birthday_day        = $request->input('birthday_day');
        $bank_name           = $request->input('bank_name');
        $bank_branch         = $request->input('bank_branch');
        $bank_type_account   = $request->input('bank_type_account');
        $bank_account_number = $request->input('bank_account_number');
        $bank_account_name   = $request->input('bank_account_name');

        session(['user_name_sei_kanji' => $user_name_sei_kanji]);
        session(['user_name_mei_kanji' => $user_name_mei_kanji]);
        session(['user_name_sei_roma' => $user_name_sei_roma]);
        session(['user_name_mei_roma' => $user_name_mei_roma]);
        session(['sex_type' => $sex_type]);
        session(['birthday_year' => $birthday_year]);
        session(['birthday_month' => $birthday_month]);
        session(['birthday_day' => $birthday_day]);
        session(['bank_name' => $bank_name]);
        session(['bank_branch' => $bank_branch]);
        session(['bank_type_account' => $bank_type_account]);
        session(['bank_account_number' => $bank_account_number]);
        session(['bank_account_name' => $bank_account_name]);
        // 要変更ここまで(2018.1.5)

        $image_id = '';
        $image    = '';

        $image = DB::table('image_data')
        ->where('user_id', $user)->first(); // firstは一個だけ取得  getは全て取得

        // dd($query->image_id);

        if($image){
            $image_id = $image->image_id; // $imageの中のimage_idを取得
            $image_id = asset('/images'). '/'. $image_id;
        } else {
            $image_id = '/img/contents/user-default.png';
        }

        return view('home/home_own_timeline')
        ->with('id', $id)
        ->with('user', $user)
        //2018.1.4追加ここから
        ->with('image_id', $image_id)
        ->with('user_name_sei_kanji', $user_name_sei_kanji)
        ->with('user_name_mei_kanji', $user_name_mei_kanji)
        ->with('user_name_sei_roma', $user_name_sei_roma)
        ->with('user_name_mei_roma', $user_name_mei_roma)
        ->with('sex_type', $sex_type)
        ->with('birthday_year', $birthday_year)
        ->with('birthday_month', $birthday_month)
        ->with('birthday_day', $birthday_day)
        ->with('bank_name', $bank_name)
        ->with('bank_branch', $bank_branch)
        ->with('bank_type_account', $bank_type_account)
        ->with('bank_account_number', $bank_account_number)
        ->with('bank_account_name', $bank_account_name)
        ;
        //2018.1.4追加ここまで

        return view('home/home_own_timeline', $user_data);
    }


    // ホーム画面投資家や選手のタイムライン
    public function home_outer_timeline($folder_name, Request $request)
    {
        // 初期パラメータを取得
        $id = Auth::user()->id;
        $user = Auth::user()->email;

        // ユーザ情報を取得
        $query = DB::table('personal_info');
        $query -> join('users', 'personal_info.user_id', '=', 'users.email');
        $query -> select('user_id', 'user_name_sei_kanji', 'user_name_mei_kanji', 'user_name_sei_roma', 'user_name_mei_roma');
        // 検索画面で選択したユーザIDで検索する
        $query -> where('folder_name', $folder_name);

        // 検索を実行
        $userinfo = $query->first();
        $disp_outer_user_name = $userinfo->user_name_sei_kanji;
        $disp_outer_user_name = $disp_outer_user_name . ' ' . $userinfo->user_name_mei_kanji;
        $disp_outer_user_name = $disp_outer_user_name . '(' . $userinfo->user_name_sei_roma;
        $disp_outer_user_name = $disp_outer_user_name . $userinfo->user_name_mei_roma . ')';

        // 検索対象のユーザIDを取得する
        $outer_user_id = $userinfo->user_id;

        $query = DB::table('main_omikuji_data');
        $query -> select('status', 'omikuji_published', 'title', 'description');
        // 検索画面で選択したユーザIDで検索する
        $query -> where('user_id',$outer_user_id);

        $data['collections'] = $query->get();
        return view('home/home_outer_timeline', $data)->with('id', $id)->with('user', $user)->with('outer_user_id',$outer_user_id)->with('disp_outer_user_name',$disp_outer_user_name);
    }
    // 検索画面
    public function home_search_outer_member(Request $request)
    {
        $id=$request->input('id');
        $user=$request->input('user_id');
        session(['search' => '']);
        return view('home/home_search_outer_member')->with('id', $id)->with('user', $user);
    }
    // 検索実行処理
    public function home_search_outer_member_process(Request $request)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->email;
        $search = $request->input('search');
        session(['name' => $request->input('name')]);
        session(['user_name_sei_kanji' => $request->input('user_name_sei_kanji')]);
        session(['user_name_mei_kanji' => $request->input('user_name_mei_kanji')]);
        session(['user_name_sei_roma' => $request->input('user_name_sei_roma')]);
        session(['user_name_mei_roma' => $request->input('user_name_mei_roma')]);
        session(['search' => $request->input('search')]);

        return view('home/home_search_outer_member_process')->with('id', $id)->with('user', $user);
    }
    // 検索結果一覧表示画面
    public function home_search_outer_member_result(Request $request)
    {
        $id = Auth::user()->id;
        $user = Auth::user()->email;
        $query = DB::table('personal_info');
        $query -> join('users', 'personal_info.user_id', '=', 'users.email');
        if (!is_null(session('search'))) {
            if (session('name') != null) {
                $query -> where('users.name', 'LIKE', session('name'));
            }
            if (session('user_name_sei_kanji') != null) {
                $query -> where('personal_info.user_name_sei_kanji', 'LIKE', session('user_name_sei_kanji'));
            }
            if (session('user_name_mei_kanji') != null) {
                $query -> where('personal_info.user_name_mei_kanji', 'LIKE', session('user_name_mei_kanji'));
            }
            if (session('user_name_sei_roma') != null) {
                $query -> where('personal_info.user_name_sei_roma', 'LIKE', session('user_name_sei_roma'));
            }
            if (session('user_name_mei_roma') != null) {
                $query -> where('personal_info.user_name_mei_roma', 'LIKE', session('user_name_mei_roma'));
            }
        } else {
            $query -> where('users.name', 'LIKE', session('search'));
            $query -> where('personal_info.user_name_sei_kanji', 'LIKE', session('search'));
            $query -> where('personal_info.user_name_mei_kanji', 'LIKE', session('search'));
            $query -> where('personal_info.user_name_sei_roma', 'LIKE', session('search'));
            $query -> where('personal_info.user_name_mei_roma', 'LIKE', session('search'));
        }
        // 自分のユーザIDは除外する
        $query -> where('personal_info.user_id', '<>', $user);

        $data['collections'] = $query->get();

        return view('home/home_search_outer_member_result', $data);
    }

}