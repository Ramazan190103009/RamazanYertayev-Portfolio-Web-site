<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function show(){
        return view('file_upload');
    }
    public function upload(Request $request){
       $file = $request->file('image');
      //File Name
      echo 'File name: '.$file->getClientOriginalName();
      echo '<br>';
      //File Extension 
      echo 'File extension: '.$file->getClientOriginalExtension();
      echo '<br>';
    
      //File size 
      echo 'File size: '.$file->getSize();
      echo '<br>';
 
      //File Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';

      //File Mime type
      echo 'File Mime Type: '.$file->getClientMimeType();
     
      //move uploaded file
      $destination = 'uploads';
      $file->move($destination, $file->getClientOriginalName());
    }
}