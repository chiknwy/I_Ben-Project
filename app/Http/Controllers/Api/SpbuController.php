<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpbuResource;
use App\Models\Spbu;
use Illuminate\Http\Request;

class SpbuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spbu = Spbu::all();
        return SpbuResource::collection($spbu);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $spbu = Spbu::create($request->all());
        return new SpbuResource($spbu);
    }

    /**
     * Display the specified resource.
     */
    public function show(Spbu $spbu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spbu $spbu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spbu $spbu)
    {
        //
        $spbu->update($request->all());

        return new SpbuResource($spbu);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spbu $spbu)
    {
        //

        $spbu->delete();

        return response(null, 204);
    }
}
