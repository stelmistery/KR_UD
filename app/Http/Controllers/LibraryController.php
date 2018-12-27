<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
               $result = DB::table('vidacha knig')->get();
               return view('library.listorders')->with('table', $result);
               break;
           case "createorders" :
               return view('library.crorders');
                break;
           case "auth" :
               return view('library.auth');
               break;
       }
   }

   public function Createorders(Request $request){
        $id_reader = $request->id_reader;
        $id_lib = $request->id_lib;
        $id_book = $request->id_book;

        DB::table('vidacha knig')->insert(['nomer chitatelya' => $id_reader, 'nomer bibliotekarya' => $id_lib, 'nomer knigi' => $id_book]);
        return view('library.listorders');
   }

//   public function libbooks(Request $request){
//       $result = DB::table('books')->get();
//       var_dump($result);
//   }

}
