<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class FileController extends Controller
{
    public function singleUpload(Request $request){
    	$request->validate([
    		'file'=>'required|mimes:jpg,jpeg,png'
    	]);
    	if($request->hasfile('file')){	
    	$fileName = random_int('00', '1000').'.'.$request->file->extension();
    	if($request->file->move(public_path('files'),$fileName)){
    		if(File::create(['file'=>$fileName])){
    			$request->Session()->flash('message','File Upload Successfully.');
    			return back();
    		}
    	}
    }
    }

    public function multileUpload(Request $request){

    	$files = [];
    	if($request->hasfile('files')){    	
    		foreach($request->file('files') as $file){
    			$fileName = random_int(000,9999).'.'.$file->extension();
    			array_push($files,$fileName);
    			$file->move(public_path('files'),$fileName);
    			File::create(['file'=>$fileName]);
    		}
			$request->Session()->flash('message','File Upload Successfully.');
    		return back();
			// for($i=0;$i<count($file);$i++){
			// 	File::create(['file'=>$fileName]);
			// }   		
    	}


    }
}

