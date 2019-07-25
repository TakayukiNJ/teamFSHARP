<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use App\Npo_register;
use App\Follow;
use App;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Image;

class FollowController extends Controller {
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
    if(Auth::user())
    {
        // ログインユーザー情報取得
//            $auth = Auth::user();
        $user_auth = Auth::user()->email;
        $data['personal_info'] = \DB::table('personal_info')->where('user_id', $user_auth)->first();

        $auth_id = $auth->authority_id;
        $user_original_id = $auth->original_id;

        // このユーザーのフォロー中情報取得
        $follows = Follow::where('follower_id', $user_original_id)->orderBy('created_at', 'desc')->paginate(9);

        // フォロー一つごとに処理
        foreach($follows as $follow)
        {
            // フォロー相手のユーザーの情報取得
            $followee = User::where('original_id', $follow->followee_id)->first();
            unset($followee['password'],$followee['email'],$followee['status_flag'],$followee['created_at'],$followee['updated_at']);

            // ユーザー情報を追加
            $follow->user = $followee;
        }


        return view('/common/follow-list',[
            'auth_id' => $auth_id,
            'user_original_id' => $user_original_id,
            'follows' => $follows
        ]);
    }
    else
    {
        return redirect()->route('login');
    }
        */
    }

    public function store(Request $request)
    {
//        Log::debug($request);
        if(Auth::user()) {
            $follower   = Auth::user()->name;
            $followee   = $request->followee;
            $delete_flg = $request->delete_flg;
            $new_flg    = $request->new_flg;
            if(!$followee){
              return back();
            };
        }else{
            return redirect('/auth/login');
        }

        // フォローしていれば削除
        if($new_flg == "new")
        {
//            dd("a");
            $follow = new Follow;
            $follow->follower_id = $follower;
            $follow->followee_id = $followee;
            $follow->delete_flg = $delete_flg;
            $follow->save();

//            dd("aas");
//            $detail = Detail::where('user_id', $influencer_info->id)->first();
//            $follower = $detail->follower_num;
//            $new_follower = $follower + 1;
//            Detail::where('user_id', $influencer_info->id)->update(['follower_num' => $new_follower]);
        } else {
            Follow::where('follower_id', $follower)
                ->where('followee_id', $followee)
                ->update([
                    'delete_flg' => $delete_flg,
                    'updated_at' => new Carbon(Carbon::now())
                ]);
        }
//            Follow::where('followee_id', $influencer_original_id)->where('follower_id', $user_original_id)->delete();
//
//            $detail = Detail::where('user_id', $influencer_info->id)->first();
//            $follower = $detail->follower_num;
//            $new_follower = $follower - 1;
//            Detail::where('user_id', $influencer_info->id)->update(['follower_num' => $new_follower]);
//        }
return back();
    }
}