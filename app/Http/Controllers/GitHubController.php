<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class GitHubController extends Controller
{    


    public static function redirect(){
        return Socialite::driver('github')->redirect();
    }
    

    public static function index(){

        $githubUser = Socialite::driver('github')->user();
        $user = User::updateOrCreate([
            'git_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
     
        Auth::login($user);
     
        return redirect('/dashboard');
    }
    




}
