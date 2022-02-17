<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function mypage(){
        return view('match/mypage')->with(['user' => Auth::user()]);
    }
    
    public function my_edit(){
        return view('match/my_edit')->with(['user' => Auth::user()]);
    }
    
    public function my_update(Request $request){
        $user_form = $request->all();
        $user = Auth::user();
        unset($user_form['_token']);
        $user->fill($user_form)->save();
        return redirect('/match/'.$user->id);
    }
    
}
