<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitikModel;

class TitikController extends Controller
{
    protected $titikModel;

    public function __construct(TitikModel $titikModel)
    {
        $this->titikModel = $titikModel;
    }

    public function index()
    {
        return view('maps');
    }

    public function json()
    {
        $result = $this->titikModel->allData();
        return response()->json($result);
    }

    public function lokasi($id=''){
        $result=$this->titikModel->getLokasi($id);
        return json_encode($result);
    }
}
