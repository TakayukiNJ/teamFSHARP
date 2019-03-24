<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home/home_own_timeline';

    public function showLoginForm()
    {
        // session(['url.intended' => $_SERVER['HTTP_REFERER']]); // この行を追加
        return view('auth.login');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // ゲストかどうか確認するミドルウェア ログアウト時を除く
        $this->middleware('guest', ['except' => 'logout']);

    }
    // ホーム画面自分のタイムライン
    public function home_own_timeline(Request $request)
    {
        $id=$request->input('id');
        $user=$request->input('user_id');
        return view('home/home_own_timeline')->with('id', $id)->with('user', $user);
    }

}
