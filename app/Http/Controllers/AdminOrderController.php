<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use ZipArchive;
use App\Orders;
class AdminOrderController extends Controller
{
    public function show(Request $request){
        if( $request->session()->has('id'))
        {
        $data=DB::table('orders')
        ->join('order_category', 'orders.order_category_id', '=', 'order_category.id')
        ->join('status', 'status.id', '=', 'orders.status')
        ->select('*','orders.id as id_order')->get();
        return view('admin.page.order')->with('data',$data);
        }
    }
    public function showUpdateView($id,Request $request){

        $data=DB::table('orders')
        ->join('status', 'status.id', '=', 'orders.status')
        ->select('*','orders.id as id_order')->where('orders.id',$id)->first();
        $dataImage=DB::table('image')->where('product_id',$data->product_id)->get();
        $dataStatus=DB::table('status')->get();
        return view('admin.page.order-detail')->with('data',$data)->with('dataStatus',$dataStatus)->with('dataImage',$dataImage);
    }
    public function update(Request $request){
        $data=Orders::find($request->input('id'));
        $data->status = $request->input('status');
        $data->save();
        return redirect('/quantri/order');
     }






}
