<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routecontroller extends Controller
{
      public function home(){
        return view('landing.content-home');
    }
    Public function aboute(){
        return view('landing.aboute');
    }
    Public function fasilitas(){
        return view('landing.fasilitas');
    }
    public function contact(){
        return view('landing.contact-me');
    }
    public function ProfilGuru(){
        return view('landing.profil-guru');
    }
    public function DetailGuru(){
        return view('landing.detail-guru');
    }

}


