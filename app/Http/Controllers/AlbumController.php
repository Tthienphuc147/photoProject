<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Orders;
use App\Product;
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
         $data=new Product();
         $data->save();
         foreach ($request->file('uploadFile') as $key => $value) {
            $data1 = new Image();
             $data1->product_id=$data->id;
             $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
             $value->move(public_path('upload'), $imageName);
             $data1->image_url ='/public/upload'.$imageName;
             $data1->save();
         }
         $data3 = new Orders();
         $data3->ten_khach_hang = '';
         $data3->email = '';
         $data3->so_dien_thoai = '';
         $data3->province_id = '';
         $data3->district_id = '';
         $data3->ward_id = '';
         $data3->address = '';
         $data3->status	 = '';
         $data3->quanity = sizeof($request->file('uploadFile'));
         $data3->order_category_id = 1;
         $data3->product_id = $data->id;
         $data3->location = '';
         $data3->save();
         return redirect('/checkout/view/'.$data3->id);
     }
}
