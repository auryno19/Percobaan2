<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Bio extends Model
{
    private static $nama = "Auryno Nagata Adyatma" ;
    

    public static function getNama(){
        return self::$nama;
    }

    public static function getUmur(){
        return date('Y') - 2000;
    }

    public static function getJk($idx){
        $jk = collect([
            ['id'=> 1, 'jenis'=>'Laki-laki'],
            ['id'=> 2, 'jenis'=>'Perempuan']
        ]);
        
        return $jk->firstWhere('id', $idx);
    }

    public static function getAlamat(){
        return "Jl.Tuntang 1 no 8 Malang";
    }

    public static function getAgama($idx){
        $agama = collect([
            ['id'=> 1, 'agama'=>'Islam'],
            ['id'=> 2, 'agama'=>'Kristen'],
            ['id'=> 3, 'agama'=>'Khatolik'],
            ['id'=> 4, 'agama'=>'Hindhu'],
            ['id'=> 5, 'agama'=>'Buddha'],
            ['id'=> 6, 'agama'=>'Kong Hu Chu']
        ]);

        return $agama->firstWhere('id', $idx);
    }

    public static function getPekerjaan(){
        return "Pelajar";
    }


}
