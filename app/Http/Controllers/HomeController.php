<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function show(){

        return view('page.home');


     }
     public function showAlbum(){

        return view('page.album');


     }

}
