<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TitikModel extends Model
{
    public function allData(){
        $result = DB::table('titik')
            ->select('nama', 'latitude', 'longitude', 'alamat', 'gambar')
            ->get();
        return $result;
    }

    public function getLokasi($id=''){
        $result = DB::table('tbl_lokasi')
            ->select('nama', 'alamat', 'gambar')
            ->where('id', $id)
            ->get();
        return $result;
    }
}
