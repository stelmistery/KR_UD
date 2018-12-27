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
               return view('library.listorders');
               break;
           case "createorders" :
//               return view('library.crorders');
               function (Request $request){
                   return $request->session()->all();
               };
           case "auth" :
               return view('library.auth');
               break;
       }
   }

   public function Librarianlogin(Request $request){
       session_start();
       if (isset($request->login) && isset($request->password)){
           $login = $request->login;
           $password = $request->password;

           $result = DB::table('librarian')->where([
               ['login', $login],
               ['password', $password]
           ])->first();

           if (isset($result)){
               $request->session()->regenerate();
               return $request->session()->all();
//               return response()->json(['active' => true]);
           } else {
               echo "Ошибка";
           }
       }
   }

//   public function libbooks(Request $request){
//       $result = DB::table('books')->get();
//       var_dump($result);
//   }

}
