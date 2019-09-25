<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class PrintController extends Controller
{
    public function index(){
        $artists = Artist::all(); 
        return view('print/index',compact('artists'));
    }
    public function artistapi(){
        $artists = Artist::all(); 
        return $artists;
    }
    public function print_details(Request $request){

        
        $artists = $request->artist_id;
        foreach($artists as $id){
            $artists_info[] = Artist::find($id);
        }
        return view('print/print',compact('artists_info'));
    }

}
