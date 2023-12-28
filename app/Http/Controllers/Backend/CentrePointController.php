<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CentrePoint;
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
        return view('maps');
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
     //dd($request->all());

    $request->validate([
        // 'coordinates' => 'required|max:255',
        // 'longitude' => 'required|max:255',
        // 'latitude' => 'required|max:255',
        // 'nama' => 'required|max:255',
        // 'alamat' => 'required|max:255',
        // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'pertalite' => 'required|max:255',
        // 'pertamax' => 'required|max:255',
        // 'pertamax_turbo' => 'required|max:255',
        // 'solar' => 'required|max:255',
    ]);

    // Check if an image file is present in the request
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
    } else {
        // Handle the case where no image is uploaded
        $imageName = null;
    }
    $centerPoint = new Titik($request->all());

   // Store the book data including the image name
   $centerPoint->image = $imageName;
   $centerPoint->save();

    


    if ($centerPoint) {
        return redirect()->route('centre-point.index')->with('success', 'Data berhasil disimpan');
    } else {
        return redirect()->route('centre-point.index')->with('error', 'Data gagal disimpan');
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
    // public function edit(CentrePoint $centrePoint)
    // {
    //     $centrePoint = CentrePoint::findOrFail($centrePoint->id);
    //     return view('backend.CentrePoint.edit',['centrePoint' => $centrePoint]);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CentrePoint $centrePoint)
    {
        $centrePoint = CentrePoint::findOrFail($centrePoint->id);
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
        $centrePoint = Titik::find($id);
        $centrePoint->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $centrePoint = Titik::find($id);
        return view ('admin.adminedit',compact('centrePoint'));
    }

}
