<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vision;
use Illuminate\Http\Request;

class SocialController extends Controller {
    public function getTwitterAuth() {
        return Socialite::driver('twitter')->redirect();
    }

    public function getTwitterAuthCallback() {
        try {
            $tuser = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect("/home/home_own_timeline");
        }
        if ($tuser) {
            dd($tuser);
        } else {
            return 'something went wrong';
        }
    }

    public function getFacebookAuth() {
        return Socialite::driver('facebook')->redirect();
    }

    public function getFacebookAuthCallback() {
        try {
            $fuser = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect("/home/home_own_timeline");
        }
        if ($fuser) {
            dd($fuser);
        } else {
            return 'something went wrong';
        }
    }

    public function getGoogleAuth() {
        return Socialite::driver('google')->redirect();
    }

    public function getGoogleAuthCallback() {
        try {
            $guser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect("/home/home_own_timeline");
        }
        if ($guser) {
            dd($guser);

        } else {
            return 'something went wrong';
        }
    }
//}
}
