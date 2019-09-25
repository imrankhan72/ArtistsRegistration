<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creation;
use App\Artist;
use App\language;
use App\Art;
use App\User;




class DashboardController extends Controller
{
    public function index(){
        $creation = Creation::count();
        $artist = Artist::count();
        $language = Language::count();
        $art = Art::count();
        $user = User::count();
        return view('dashboard/index',compact('creation','artist','language','art','user'));
    }
}
