<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class VerifyController extends Controller
{
    public function index(Request $request){
    	if($user=User::where('otp',$request->otp)->first()){             
            $user->otp = $request->otp = 'verified';
            if($user->save())
            {
                return redirect('login');
            }
        }else{
        	$request->Session()->flash('message','OTP is Not Match');
        	return back();
        }
    }
}
