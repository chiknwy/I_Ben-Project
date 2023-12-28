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
        'image',
        'pertalite',
        'pertamax',
        'pertamax_turbo',
        'solar',
        'latitude',
        'longitude',
        'coordinate'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function allData(){
        $result = DB::table('titiks')
            ->select('nama', 'coordinate','latitude', 'longitude' , 'alamat' , 'image', 'pertalite', 'pertamax', 'pertamax_turbo', 'solar')
            ->get();
        return $result;
    }

    public function getLokasi($id=''){
        $result = DB::table('tbl_lokasi')
            ->select('nama', 'alamat', 'image')
            ->where('id', $id)
            ->get();
        return $result;
    }
}
