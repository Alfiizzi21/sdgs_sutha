<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('id');
    }

    private function beritaLainnya()
    {
        $beritaLainnya = Berita::inRandomOrder()->paginate(4);
        return $beritaLainnya;
    }

    public function berita()
    {
        $beritaLainnya = $this->beritaLainnya();
        $beritas = Berita::orderBy('created_at','desc')->paginate(8);
        return view('frontend.berita.berita',compact(['beritas','beritaLainnya']));
    }

    public function showBerita($id,$slug)
    {
        $beritaLainnya = $this->beritaLainnya();
        $berita = Berita::find($id);
        return view('frontend.berita.single',compact(['berita','beritaLainnya']));
    }
}
