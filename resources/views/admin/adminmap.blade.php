@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        

    <style>
        #map {
            height: 400px;
        }
        .leaflet-container{
          height: 500px;
        }
    </style>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/map.css"> {{-- CSS untuk ukuran map --}}
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/> {{-- Leaflet CSS --}}
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script> {{-- Leaflet JavaScript --}}
  <link rel="icon" href={{URL('img/maps/iben-4-removebg-preview-5.png')}}>
  <script type="text/javascript" src="{{ asset('resources\js\maps.js') }}"></script> {{-- Updated path to maps.js --}}
  <title>Map</title>
</head>
<body class="bg-indigo-900">
      <header class="py-0 md:py-1">
        <div class="px-5">
          <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
            <div class="flex flex-col items-stretch w-[24%] max-md:w-full max-md:ml-0">
              <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" class="aspect-[1.33] object-contain object-center w-[150px] overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
            </div>
            <div class="flex flex-col items-stretch w-[30%] ml-5 max-md:w-full max-md:ml-0">
              <div class="items-stretch flex justify-between gap-5 my-auto max-md:justify-center max-md:mt-10">
                <a href="{{url('/home')}}" class="text-indigo-500 text-lg font-medium whitespace-nowrap">Home</a>
                <div class="text-black text-lg font-medium">Maps</div>
                @if (Auth::check())
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-indigo-500 text-lg font-medium whitespace-nowrap" >Logout</button>
                  </form>
                @else
                  <a href="{{ route('login') }}"><div class="text-white text-lg font-medium whitespace-nowrap">LOGIN</div></a>
                      <a href="{{ route('register') }}"><button  class="text-white text-lg font-medium whitespace-nowrap bg-teal-500 w-24 h-8 rounded-lg">SIGN UP</button></a>
                    </div>
                @endif
              </div>
            </div>
            <div class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full max-md:ml-0">
              @if (Auth::check())
              <div class="bg-gray-200 flex items-center justify-between gap-5 w-full my-auto pl-5 pr-2 py-2 rounded-xl max-md:max-w-full max-md:flex-wrap max-md:mt-10">
                <input type="text" class="text-indigo-700 text-lg font-medium grow whitespace-nowrap my-auto w-full bg-transparent outline-none" placeholder="Search" />
                <div class="bg-teal-300 flex w-1/2 md:w-12 flex-col justify-center items-center h-12 px-3.5 rounded-xl">
                  <img loading="lazy" src="{{url('img/maps/search.svg')}}" class="aspect-square object-contain object-center w-full overflow-hidden" />
                </div>              
              </div>
              @endif
            </div>
          </div>
        </div>
      </header>
    
    
    {{-- <div class="grid grid-cols-2 gap-4">
    Maps Here!
      <div class="w-5/6 p-4">
        <div id="map" class="top-[20px]"></div> 
      </div> --}}
        {{--  <img class=" " src="https://via.placeholder.com/1440x843" /> --}}

      
    {{--CRUD--}}
    <div class="container mx-auto">
      <div class="flex justify-center">
          <div class="w-1/2">
              <div class="card">
                  <div class="card-header">Add new Spot</div>
                  <div class="card-body">
                      <div id="map" ></div>
                  </div>
              </div>
          </div>
  
          <div class="w-1/2">
              <div class="card">
                  <div class="card-header">Add new data spot</div>
                  <div class="card-body">
                    <form action="{{ route('centre-point.store') }}" method="post">
                      @csrf
                      <div class="form-group" style="display: none;">
                          <label for="">Koordinat</label>
                          <input type="text" class="form-control @error('coordinate') is-invalid @enderror" name="coordinate" id="coordinate">
                          @error('coordinate')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="">Longitude</label>
                          <input type="text" class="form-control" required name="longitude" id="longitude">
                      </div>
                      <div class="form-group">
                          <label for="">latitude</label>
                          <input type="text" class="form-control" required name="latitude" id="latitude">
                      </div>
                      <div class="form-group">
                          <label for="">Nama</label>
                          <input type="text" class="form-control" required name="nama" id="nama">
                      </div>
                      <div class="form-group">
                          <label for="">Alamat</label>
                          <input type="text" class="form-control"  name="alamat" id="alamat">
                      </div>
                      <div class="form-group">
                        <label for="pertamax">Pertamax</label>
                        <select class="form-control" name="pertamax" id="pertamax">
                            <option value="Available">Available</option>
                            <option value="Not-Available">Not Available</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pertalite">Pertalite</label>
                        <select class="form-control" name="pertalite" id="pertalite">
                            <option value="Available">Available</option>
                            <option value="Not-Available">Not Available</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pertamax_turbo">Pertamax Turbo</label>
                        <select class="form-control" name="pertamax_turbo" id="pertamax_turbo">
                            <option value="Available">Available</option>
                            <option value="Not-Available">Not Available</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="solar">Solar</label>
                        <select class="form-control" name="solar" id="solar">
                            <option value="Available">Available</option>
                            <option value="Not-Available">Not Available</option>
                        </select>

                      <div class="mb-4">
                          <label class="block text-sm text-black-400">Foto SPBU:</label>
                          <input type="file" name="gambar" id="gambar"
                              class="w-full px-3 py-2 border rounded-md text-black-400  focus:outline-none  border-black-200"
                              required>
                      </div>
  
                          <div class="form-group">
                              <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-600">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</div>

      

    {{-- <footer>
        <div class="bg-teal-300 flex flex-col items-stretch px-20 py-12 max-md:px-5">
            <div class="flex justify-between gap-5 ml-3 mr-4 items-start max-md:max-w-full max-md:flex-wrap max-md:mr-2.5">
              <div class="flex basis-[0%] flex-col items-start">
                <div class="text-blue-500 text-lg whitespace-nowrap ml-5 max-md:ml-2.5">I-Ben</div>
                <div class="text-indigo-700 text-lg font-medium whitespace-nowrap">
                  We help you <br /> find your fuel
                </div>
                <div class="items-stretch self-stretch flex justify-between gap-5 mt-6 max-md:justify-center">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/24db9dfd36834c72b5fc22234af8dbc82dc62ef521e4321acb50e1301b7e563c?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ac5e3c6f95d20709af43aaa037a7f5261980a784ffa36d8707b1399bb29e2648?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0e54f8105bdec6035c906c787f6083e8e6eadcb5beeaae996df977cf21bb2bf4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                </div>
              </div>
              <div class="self-stretch max-md:max-w-full">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                  <div class="flex flex-col items-stretch w-[31%] max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Information</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">About</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Product</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Blog</div>
                    </div>
                  </div>
                  <div class="flex flex-col items-stretch w-[30%] ml-5 max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Company</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Community</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Career</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Our story</div>
                    </div>
                  </div>
                  <div class="flex flex-col items-stretch w-[39%] ml-5 max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Contact</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Getting Started</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Pricing</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Resources</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer> --}}
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 10,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var Stadia_Dark = L.tileLayer(
            'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            });

        var Esri_WorldStreetMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
            });

        var map = L.map('map', {
            center: [-5.129541583080711, 113.62957770241515],
            zoom: 5,
            layers: [osm]
        })


        var marker = L.marker([-5.129541583080711, 113.62957770241515], {
            draggable: true
        }).addTo(map);

        var baseMaps = {
            'Open Street Map': osm,
            'Esri World': Esri_WorldStreetMap,
            'Stadia Dark': Stadia_Dark
        }

        L.control.layers(baseMaps).addTo(map)

        // CARA PERTAMA
        function onMapClick(e) {
            var coords = document.querySelector("[name=coordinate]")
            var latitude = document.querySelector("[name=latitude]")
            var longitude = document.querySelector("[name=longitude]")
            var lat = e.latlng.lat
            var lng = e.latlng.lng

            if (!marker) {
                marker = L.marker(e.latlng).addTo(map)
            } else {
                marker.setLatLng(e.latlng)
            }

            coords.value = lat + "," + lng
            latitude.value = lat,
                longitude.value = lng
        }
        map.on('click', onMapClick)
        // CARA PERTAMA

        // CARA KEDUA
        marker.on('dragend', function() {
            var coordinate = marker.getLatLng();
            marker.setLatLng(coordinate, {
                draggable: true
            })
            $('#coordinate').val(coordinate.lat + "," + coordinate.lng).keyup()
            $('#latitude').val(coordinate.lat).keyup()
            $('#longitude').val(coordinate.lng).keyup()
        })
        // CARA KEDUA
    </script> 
    
</body> 
