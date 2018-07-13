<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Paket;
use App\Fasilitas;
use App\Pembina;
use App\Syarat;
use App\About;
use App\Berita;
class FronController extends Controller
{
      public function blog()
    {
        $artikel = Artikel::paginate(6);
        return view('frontend.blog.all',compact('artikel'));
    }

    public function singleblog($id) 
    {
        $artikel = Artikel::findOrFail($id);
        return view('frontend.blog.single',compact('artikel'));
    }
     public function Paket()
    {
        $paket = Paket::paginate(6);
        $fasilitas = Fasilitas::all();
        $pembina = Pembina::all();
        $syarat = Syarat::all();
        return view('frontend.pakett.paket',compact('paket','fasilitas','pembina','syarat'));
    }
 public function about()
    {
 
        $about = About::all();
        return view('frontend.aboutt.about',compact('about'));
    }
    public function jadwal()
    {
 
        $jadwal = Jadwal::all();
        $paket = Paket::all();
        return view('frontend.jadwall.jadwal',compact('jadwal','paket'));
    }
}
