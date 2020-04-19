<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orders;
class OrderSuccessController extends Controller
{
     public function show($id,Request $request){
        $data=Orders::find($id);
        return view('page.checkout')->with('data',$data);
     }


}
