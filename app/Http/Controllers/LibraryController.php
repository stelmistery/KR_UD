<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
   public function Librarypage($page){
       switch ($page)
       {
           case "reads" :
               $result = DB::table('Chitatel')->get();
               return view('library.listreads')->with('readers', $result);
               break;

           case "books" :
               $result = DB::table('kniga')->get();
//               $connect = new PDO('')
               return view('library.listbooks')->with('knigi', $result);
               break;

           case "orders" :
               $result = DB::table('vidacha knig')->get();
//               $result = DB::table('vidacha knig')->where('nomer chitatelya'`);
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
//        return view('library.listorders');
       return redirect()->action(
           'LibraryController@Librarypage', ['page' => 'orders']
       );
   }

   public function Createreader(Request $request) {
       $famil = $request->famil;
       $imya = $request->imya;
       $otch = $request->otch;
       $adres = $request->adres;

       DB::table('Chitatel')->insert(['familia' => $famil, 'imya' => $imya, 'otchestvo' => $otch, 'adres' => $adres]);

       return redirect()->action('LibraryController@Librarypage', ['page' => 'reads']);
   }

   public function Createbooks(Request $request){
       $num_janr = $request->num_janr;
       $nazvanie = $request->nazvanie;
       $avtor = $request-> avtor;

       DB::table('kniga')->insert([ 'nomer janra' => $num_janr, 'nazvanie knigi' => $nazvanie, 'avtor' => $avtor ]);
       return redirect()->action('LibraryController@Librarypage', ['page' => 'books']);

   }

   public function Closeoerder(Request $request){
        $id_order = $request->id_order;
       $ldate = date('Y-m-d H:i:s');
        DB::table('vidacha knig')->where('nomer zapisi', $id_order)->update(['sostoyanie' => 0, 'data vozvrata' => $ldate]);
       return redirect()->action('LibraryController@Librarypage', ['page' => 'orders']);

   }
}
