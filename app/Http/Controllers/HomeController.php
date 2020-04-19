<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
class HomeController extends Controller
{
    public function show(){

        return view('page.home');


     }
     public function showAlbum(){

        $bookCover = Book::get();
        return view('page.album')->with('bookCover',$bookCover);


     }

}
