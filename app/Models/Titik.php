<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Titik extends Model
{   
    protected $fillable = [
        'nama',
        'alamat',
        'gambar',
        'pertalite',
        'pertamax',
        'pertamax_turbo',
        'solar',
        'latitude',
        'longitude',
        'coordinates'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function allData(){
    //     $result = DB::table('titiks')
    //         ->select('nama', 'coordinates','latitude', 'longitude' , 'alamat' , 'gambar', 'pertalite', 'pertamax', 'pertamax_turbo', 'solar')
    //         ->get();
    //     return $result;
    // }

    // public function getLokasi($id=''){
    //     $result = DB::table('tbl_lokasi')
    //         ->select('nama', 'alamat', 'gambar')
    //         ->where('id', $id)
    //         ->get();
    //     return $result;
    // }
}
