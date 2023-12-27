<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Centre_Point;
use App\Models\Titik;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CentrePointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.CentrePoint.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.CentrePoint.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'coordinates' => 'required|max:255', 
            // 'longitude' => 'required|max:255',
            // 'latitude' => 'required|max:255',
            // 'nama' => 'required|max:255',
            // 'alamat' => 'required|max:255',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'pertalite' => 'required|max:255',
            // 'pertamax' => 'required|max:255',
            // 'pertamax_turbo' => 'required|max:255',
            // 'solar' => 'required|max:255',
        ]);

        $centerPoint = new Titik($request->all());
        $centerPoint->coordinates = $request->input('coordinate');
        $centerPoint->longitude = $request->input('longitude');
        $centerPoint->latitude = $request->input('latitude');
        $centerPoint->nama = $request->input('nama');
        $centerPoint->alamat = $request->input('alamat');
        $centerPoint->gambar = $request->input('gambar');
        $centerPoint->pertalite = $request->input('pertalite');
        $centerPoint->pertamax = $request->input('pertamax');
        $centerPoint->pertamax_turbo = $request->input('pertamax_turbo');
        $centerPoint->solar = $request->input('solar');
        // $centerPoint->user_id = auth()->user()->id;

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension() ;  
            $centerPoint->gambar->move(public_path('uploads'), $imageName);
            $centerPoint->gambar = $imageName;
        }
        // $imageName = time().'.'.$request->gambar->extension() ;  
        // $centerPoint->gambar->move(public_path('uploads'), $imageName);

        // $validate['gambar'] = $imageName;

        // $centerPoint->gambar = $imageName;

        
        $centerPoint->save();

        if ($centerPoint) {
            return to_route('centre-point.index')->with('success','Data berhasil disimpan');
        } else {
            return to_route('centre-point.index')->with('error','Data gagal disimpan');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centre_Point $centrePoint)
    {
        $centrePoint = Centre_Point::findOrFail($centrePoint->id);
        return view('backend.CentrePoint.edit',['centrePoint' => $centrePoint]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centre_Point $centrePoint)
    {
        $centrePoint = Centre_Point::findOrFail($centrePoint->id);
        $centrePoint->coordinates = $request->input('coordinate');
        $centrePoint->update();

        if ($centrePoint) {
            return to_route('centre-point.index')->with('success','Data berhasil diupdate');
        } else {
            return to_route('centre-point.index')->with('error','Data gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $centrePoint = Centre_Point::findOrFail($id);
        $centrePoint->delete();
        return redirect()->back();
    }
}
