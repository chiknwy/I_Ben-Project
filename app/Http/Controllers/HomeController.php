<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titik;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Geocoder\ProviderAggregator;
use Geocoder\Provider\OpenCage\OpenCage;
use Geocoder\Query\GeocodeQuery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return view('home');
    }

    public function user_map(){
        $titik = Titik::get()->first();
        // $spot = Spot::get();

        return view('maps',[
            'titik' => $titik,
            // 'spot' => $spot
        ]);
    }
    

    public function pay(){
        return view('pay');
    }

    public function barcode(){
        return view('barcode');
    }
    public function admins()
    {   
        $admin = auth()->user();
        $users = User::all();
        if (auth()->check() && $admin->usertype == 1 ) {
            return view('admin.admins',compact('users'));
        }
        else{
            return redirect()->route('home')->with('error', 'You are not an admin!');
        }
    }
    public function admin_map(){
        $admin = auth()->user();
        $users = User::all();
        if (auth()->check() && $admin->usertype == 1) {
            return view('admin.adminmap',compact('users'));
        }
        else{
            return redirect()->route('home')->with('error', 'You are not an admin!');
        }
    }

    public function admin_edit($id){
        $admin = auth()->user();
        $users = Titik::all();
        $title = Titik::find($id);

        if (auth()->check() && $admin->usertype == 1) {
            return view('admin.adminedit',compact('users','title'));
        }
        else{
            return redirect()->route('home')->with('error', 'You are not an admin!');
        }
    }

    public function update(request $request, $id){
        $titik = Titik::find($id);

        $titik->nama = $request->input('nama');
        $titik->alamat = $request->input('alamat');
        $titik->latitude = $request->input('latitude');
        $titik->longitude = $request->input('longitude');
        $titik->pertalite = $request->input('pertalite');
        $titik->pertamax = $request->input('pertamax');
        $titik->pertamax_turbo = $request->input('pertamax_turbo');
        $titik->solar = $request->input('solar');

        if ($request->hasFile('image')) {
            // Delete the existing image if it exists
            if ($titik->image) {
                // ...

                Storage::delete('public/images/' . $titik->image);
            }
    
            // Move the new image to the storage
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
    
            // Update the book with the new image name
            $titik->image = $imageName;
        }

        $titik->save();

        return redirect('/adminpage')->with('success', 'Data berhasil diupdate');
    }



    public function adminpage()
    {
        $titik = Titik::all();
        $admin = auth()->user();
        $users = User::all();

        if (auth()->check() && $admin->usertype == 1) {
            return view('admin.adminpage', compact('titik', 'users'));
        } else {
            return redirect()->route('home')->with('error', 'You are not an admin!');
        }
        
    }

    public function simple_map()
    {
        return view('leaflet.simple-map');
    }

    public function marker()
    {
        return view('leaflet.marker');
    }

    public function circle()
    {
        return view('leaflet.circle');
    }

    public function polygon()
    {
        return view('leaflet.polygon');
    }

    public function polyline()
    {
        return view('leaflet.poyline');
    }

    public function rectangle()
    {
        return view('leaflet.rectangle');
    }

    public function layers()
    {
        return view('leaflet.layer');
    }

    public function layer_group()
    {
        return view('leaflet.layer_group');
    }

    public function geojson()
    {
        return view('leaflet.geojson');
    }

    public function getCoordinate()
    {
        return view('leaflet.get_coordinate');
    }



    public function geocode(Request $request)
    {
        // mengambil alamat dari inputtan
        $alamat = $request->input('alamat');

        $titik = Titik::where('alamat', $alamat)->first();

        if($titik){
            $coordinates = [
                'lat' => $titik->latitude,
                'long' => $titik->longitude,
            ];

            return response()->json($coordinates);
        } else{
            return response()->json(['error' => 'Address not found'], 404);
        }
    }


    public function alamat()
    {
        $titik = Titik::get()->first();
        // $spot = Spot::get();

        return view('maps',[
            'titik' => $titik,
            // 'spot' => $spot
        ]);
    }

    // public function detailSpot($slug)
    // {
    //     $spot = Spot::where('slug',$slug)->first();
    //     return view('frontend.detail',['spot' => $spot]);
    // }
}
