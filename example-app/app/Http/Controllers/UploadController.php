<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\UploadModel;
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
    public function index(){
        return view('upload_db');
    }
    public function upload2(Request $request){
            $request->validate([
              'imageFile' => 'required',
              'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
            ]);
        
            if($request->hasfile('imageFile')) {
                foreach($request->file('imageFile') as $file)
                {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path().'/uploads/', $name);  
                    $imgData[] = $name;  
                }
        
                $fileModal = new Image();
                $fileModal->name = json_encode($imgData);
                $fileModal->image_path = json_encode($imgData);
                
               
                $fileModal->save();
        
               return back()->with('success', 'File has successfully uploaded!');
            }
    }
}