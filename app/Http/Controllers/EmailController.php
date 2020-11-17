<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function html_email() {
      $data = array('name'=>"Mahendra",'body'=>"Hello This my First Mail In Laravel 8");
      Mail::send('mail', $data, function($message) {
         $message->to('lakumm200@gmail.com', 'Mahendra-PC Laravel Test');
         $message->subject('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','From Mahendra-PC');//optional
      });
      echo "HTML Email Sent. Check your inbox.";
   }
}
