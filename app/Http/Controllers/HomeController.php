<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\KepengurusanController;
use App\Models\Kepengurusan;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $kepengurusan = Kepengurusan::all();
        $berita = Berita::all();
        return view('frontend.homepage', ['kepengurusan' => $kepengurusan, 'berita' => $berita]);
    }
    
    public function about(){
        return view('frontend.about');
    }
    public function pengumuman(){
        return view('frontend.pengumuman');
    }
    public function wkri(){
        return view('frontend.wkri');
    }
    public function omk(){
        return view('frontend.omk');
    }
    public function misdinar(){
        return view('frontend.misdinar');
    }
    public function bir(){
        return view('frontend.bir');
    }
    public function bia(){
        return view('frontend.bia');
    }
    public function lingkungan(){
        return view('frontend.lingkungan');
    }
    public function berita(){
        return view('frontend.berita');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function selengkapnya(){
        return view('frontend.selengkapnya');
    }
}
