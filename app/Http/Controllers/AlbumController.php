<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AlbumController extends Controller
{
    public function show(){
        return view('page.test');
     }
     public function imagesUploadPost(Request $request)

     {

         request()->validate([

             'uploadFile' => 'required',

         ]);


        var_dump($request->file('uploadFile'));
        //  foreach ($request->file('uploadFile') as $key => $value) {

        //      $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

        //      $value->move(public_path('images'), $imageName);

        //  }
        //  var_dump($imageName);
     }
}
