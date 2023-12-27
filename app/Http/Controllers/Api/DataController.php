<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\CentrePoint;
use App\Models\Space;

class DataController extends Controller
{
    /**
     * Method to fetch and return CentrePoint data in JSON format.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function centrepoint()
    {
        $centrepoint = CentrePoint::orderBy('created_at', 'DESC')->get();
        
        return response()->json(['centrepoint' => $centrepoint]);
    }

    /**
     * Method to fetch and return Space data in JSON format.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function space()
    {
        $space = Space::orderBy('created_at', 'DESC')->get();
        
        return response()->json(['space' => $space]);
    }
}