<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;


class BiodataController extends Controller
{

    public function index(){
        return view('biodata', [
            "title" => Biodata::find()->title,
            "nama" => Biodata::first()->nama,
            "umur" => Biodata::first()->umur,
            "jk" => Biodata::first()->jk,
            "alamat" => Biodata::first()->alamat,
            "agama" => Biodata::first()->agama,
            "pekerjaan" => Biodata::first()->pekerjaan
        ]);
    }


}


