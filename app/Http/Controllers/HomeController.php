<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titik;
use App\Models\User;

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
        return view('maps');
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

    public function spots()
    {
        $centerPoint = CentrePoint::get()->first();
        $spot = Spot::get();

        return view('frontend.home',[
            'centerPoint' => $centerPoint,
            'spot' => $spot
        ]);
    }

    public function detailSpot($slug)
    {
        $spot = Spot::where('slug',$slug)->first();
        return view('frontend.detail',['spot' => $spot]);
    }
}
