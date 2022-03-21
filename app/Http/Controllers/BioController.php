<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;

class BioController extends Controller
{
    public function home(){
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about(){
        return view('biodata', [
            "title" => "Biodata",
            "nama" => Bio::getNama(),
            "umur" => Bio::getUmur(),
            "jk" => Bio::getJk(1),
            "alamat" => Bio::getAlamat(),
            "agama" => Bio::getAgama(1),
            "pekerjaan" => Bio::getPekerjaan()
        ]);
    }

    public function komentar(){
        return view('komentar', [
            "title" => "Komentar"
        ]);
    }
}


