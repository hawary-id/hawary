<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }

    public function source_kode(){
        return view('aplikasi');
    }

    public function artikel(){
        return view('artikel');
    }

    public function project(){
        return view ('project');
    }

    public function tentang(){
        return view('tentang');
    }
}
