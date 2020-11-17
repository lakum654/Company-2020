<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;
class RegisterController extends Controller
{
    public function index(Request $request){
    	$input = $request->validate([
    		'name'=>'required',
    		'email'=>'required|email|max:255|unique:users',
    		'password'=>'required|min:8|confirmed'
    	]);
    	$input['password'] = bcrypt($request->password);
    	$input['otp'] = random_int('000000', '999999');
    	$email = $request->email;
    	if(User::create($input)){
    	$data = array('name'=>"Mahendra",'body'=>"Hello, Your OTP is ".$input['otp']);    	
      	Mail::send(['html'=>'mail'], $data, function($message) use($email) {
         $message->to($email, 'Mahendra-PC Laravel OTP Test');
         $message->subject('Laravel HTML Testing OTP Mail');
         $message->from('xyz@gmail.com','From Mahendra-PC');//optional
      	});
      		return redirect('otp-verify');
      	}
    	
    	
    }
}
