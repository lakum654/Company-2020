<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
   public function index(Request $request){
   		$input = $request->validate([
   			'email'=>'required|email|max:255',
   			'password'=>'required|min:8',
   		]);
         $remember = $request->remember;
         
   		if(Auth::attempt($input,$remember)){
   			return redirect(RouteServiceProvider::HOME);
   		}
   }

   public function logout(){
   	Auth::logout();
   	return redirect('/');
   }
}
