<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;
class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('pages.index',compact('trains'));
    }
    //
    public function partenze(){
        $trains = Train::all();
    
        

        return view('pages.partenze',compact('trains'));
    }
}
//     public function partenze(Request $request)
//     {
        
//         $trains = Train::all();
//       $date = date_default_timezone_set("Europe/Rome");

//         $train =  $trains->ora_partenza;
//         if ($request->has('ora_partenza')) {
//             $train->where(time('ora_partenza'), '>', time($date));
//         }

        
//         return view('pages.partenze',compact('trains'));
//     }
// }
