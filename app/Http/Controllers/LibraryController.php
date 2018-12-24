<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
   public function Librarypage($page){
       switch ($page)
       {
           case "reads" :
               return view('library.listreads');
               break;
           case "books" :
               return view('library.listbooks');
               break;
           case "orders" :
               return view('library.listorders');
               break;
           case "createorders" :
               return view('library.crorders');
               break;
       }
   }

}
