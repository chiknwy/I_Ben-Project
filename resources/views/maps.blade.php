<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/map.css"> {{-- CSS untuk ukuran map --}}
  {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/> Leaflet CSS --}}
  {{-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script> Leaflet JavaScript --}}

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="icon" href={{URL('img/maps/iben-4-removebg-preview-5.png')}}>
  {{-- <script type="text/javascript" src="{{ asset('resources\js\maps.js') }}"></script> Updated path to maps.js --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

  {{-- <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
  <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css"> --}}
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>

<!-- Leaflet.Search CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-search/dist/leaflet-search.min.css" />

<!-- Leaflet.Search JavaScript -->
<script src="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.js"></script>

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
                <a href="{{url('/home')}}" class="text-indigo-700 text-lg font-medium whitespace-nowrap">Home</a>
                <div class="text-black text-lg font-medium">Maps</div>
                <a href="" class="text-indigo-700 text-lg font-medium whitespace-nowrap">Contacts</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="font-bold text-indigo-500 hover:underline">Logout</button>
              </form>
              </div>
            </div>
            <div class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full max-md:ml-0">
              <div class="bg-gray-200 flex items-center justify-between gap-5 w-full my-auto pl-5 pr-2 py-2 rounded-xl max-md:max-w-full max-md:flex-wrap max-md:mt-10">
                <input type="text" class="text-indigo-700 text-lg font-medium grow whitespace-nowrap my-auto w-full bg-transparent outline-none" placeholder="Search" />
                <div class="bg-teal-300 flex w-1/2 md:w-12 flex-col justify-center items-center h-12 px-3.5 rounded-xl">
                  <img loading="lazy" src="{{url('img/maps/search.svg')}}" class="aspect-square object-contain object-center w-full overflow-hidden" />
                </div>              
              </div>
            </div>
          </div>
        </div>
      </header>
    

    {{-- Maps Here! --}}
    <div id="map" class="top-[20px]">
    </div>

        {{--  <img class=" " src="https://via.placeholder.com/1440x843" /> --}}

    
    {{-- Contach here! --}}
    <div class="bg-indigo-900 py-10">
        <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
          <div class="flex flex-col items-stretch w-[59%] max-md:w-full max-md:ml-0">
            <div class="flex flex-col items-stretch px-5 max-md:max-w-full max-md:mt-10">
              <div class="text-teal-300 text-6xl font-extrabold leading-[64px] max-md:max-w-full max-md:text-4xl max-md:leading-10">
                Feel free to contact us
              </div>
              <div class="text-teal-300 text-3xl font-bold leading-10 mt-10 max-md:max-w-full">
                Contact
              </div>
              <div class="text-teal-300 text-3xl leading-10 mt-6 max-md:max-w-full">
                infobensin@gmail.com
              </div>
              <div class="text-teal-300 text-3xl font-bold leading-10 mt-20 max-md:max-w-full max-md:mt-10">
                Based in
              </div>
              <div class="text-teal-300 text-3xl leading-10 mt-6 max-md:max-w-full">
                Singaraja, <br /> Buleleng, Bali
              </div>
            </div>
          </div>
          <div class="flex flex-col items-stretch w-[41%] ml-5 max-md:w-full max-md:ml-0">
            <div class="grow mt-64 py-10 max-md:max-w-full max-md:mt-10 max-md:pr-5">
              <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                <div class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/42cb7e90ce9f1117c7ea9c376bd5019c0cd08c7831d0ed2818b2f0ddb999229b?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"
                    class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full max-md:mt-10"
                  />
                </div>
                <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b4a0a404c26b778aaef235dbea4b19df43b2cb216dd42c7ec558782e49ff1fe?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"
                    class="aspect-square object-contain object-center w-12 justify-center items-center overflow-hidden shrink-0 max-w-full max-md:mt-10"
                  />
                </div>
                <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/92c0228ef6604da294863e9ce2002141a61963a26213c8fee0cb485698b58108?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"
                    class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full max-md:mt-10"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <footer>
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
    </footer>

    @if(session('error'))
    <script>alert('{{ session('error') }}');</script>
    @endif
@if(session('success'))
    <script>alert('{{ session('success') }}');</script>
@endif
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>

      	// const map = L.map('map').setView([-8.116167984286907, 115.08773688558952], 5);

        // const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //   maxZoom: 19,
        //   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map);


        //  //var marker = L.marker([-8.116167984286907, 115.08773688558952]).addTo(map)
        
        //    var gasIcon = L.icon({
        //     iconUrl: 'img/icon/icongas.png',
        //     iconSize:     [34, 38], // size of the icon
        //     iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
        //     popupAnchor:  [20, 20] // point from which the popup should open relative to the iconAnchor
        //   });

        // $( document ).ready(function() {
        //     $.getJSON('/titik/json', function(data) {
        //       $.each(data, function(index) {
        //         //alert(data[index].image)
        //         var image = data[index].image;
        //         var html = '<div class="bg-indigo-700 border-2 border-teal-600 p-3 max-w-md mx-auto shadow-lg rounded-md">';
        //             html += '<h5 class="mb-1 text-lg font-semibold text-white">Nama Lokasi: ' + data[index].nama + ' </h5>';
        //             html += '<h5 class="mb-2 text-sm text-gray-800">Alamat: ' + data[index].alamat + ' </h5>';
        //             html += '<h5 class="mb-2 text-sm text-blue-200">Pertamax: ' + data[index].pertamax + ' </h5>';
        //             html += '<h5 class="mb-2 text-sm text-green-200">Pertalite: ' + data[index].pertalite + ' </h5>';
        //             html += '<h5 class="mb-2 text-sm text-yellow-200">Pertamax Turbo: ' + data[index].pertamax_turbo + ' </h5>';
        //             html += '<h5 class="mb-2 text-sm text-red-200">Solar: ' + data[index].solar + ' </h5>';
        //             html += '<img class="max-w-full mt-2 rounded-md" src="images/' + data[index].image + '">';
        //             html += '<a href="{{url('transaction')}}"><button onclick="redirectToPayment()" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-1 px-2 rounded-full block mt-2">Buy Now</button></a>';
        //             html += '</div>';
        //         L.marker([parseFloat(data[index].latitude), parseFloat(data[index].longitude)], {
        //           icon:gasIcon,
        //           title:data[index].nama
        //         })
        //         .addTo(map)
        //         .bindPopup(html)
        //         // .openPopup();

        //       })
        //     });
        // });

        // var datas = [
        //     @foreach ($titik as $key => $value)
        //         {
        //             "loc": [{{ $titik->coordinate }}],
        //             "title": '{!! $value->nama}',
        //         },
        //     @endforeach
        // ]

        // var markerLayer = new L.layerGroup()
        // map.addLayer(markerLayer)
        // var controlSearch = new L.Control.Search({
        //   position:'topleft',
        //   layer:markerLayer,
        //   zoom:15,
        //   markerLocation:true
        // })

        // map.addControl(controlSearch)

        // for(i in datas){
        //   var title = datas[i].nama,
        //   loc = datas[i].coordinate,
        //   marker = new L.Marker(new L.latLng(loc),{
        //     title: title
        //   })
        //   markerLayer.addLayer(marker)
        // }





        // var searchControl = new L.esri.Controls.Geosearch().addTo(map);

        // var results = new L.LayerGroup().addTo(map);
              
        // searchControl.on('results', function (data) {
        //     results.clearLayers();
        
        //     // Assuming you have a route in Laravel that handles geocoding based on 'alamat'
        //     $.ajax({
        //         url: '/geocode',
        //         method: 'POST',
        //         data: {
        //             alamat: data.text // Pass the search query to your server
        //         },
        //         success: function (response) {
        //             // Check if the response contains valid coordinates
        //             if (response && response.lat !== undefined && response.lng !== undefined) {
        //                 results.addLayer(L.marker([response.lat, response.lng]));
        //                 map.setView([response.lat, response.lng], 14); // Optionally, center the map on the result
        //             } else {
        //                 console.error("Invalid response format:", response);
        //                 // Handle the case when the response format is unexpected
        //             }
        //         },
        //         error: function (error) {
        //             console.error("Error fetching geocoding results:", error.responseText);
        //             // Handle the geocoding error, e.g., display a message to the user
        //         }
        //     });
        // });




        // $( document ).ready(function() {
        //     $.getJSON('/titik/json', function(data) {
        //       $.each(data, function(index) {
        //         // alert(data[index].nama)
                
        //         var html='<h5>Nama Lokasi: '+data[index].nama+' </h5>'
        //             html+= '<h5>Alamat: '+data[index].alamat+' </h5>'
        //             html+='<img src="img/icon/spbu1.jpg">'
        //             html += '<button onclick="redirectToPayment()">Go to Payment</button>'
        //         L.marker([parseFloat(data[index].latitude), parseFloat(data[index].longitude)], {
        //           icon:gasIcon,
        //           title:data[index].nama
        //         })
        //         .addTo(map)
        //         .bindPopup(html)
        //         .openPopup();

        //       })

        //     });
        // });


        
        $(document).ready(function () {
        const map = L.map('map').setView([-8.116167984286907, 115.08773688558952], 5);

        // Add the OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Icon for markers
        const gasIcon = L.icon({
            iconUrl: 'img/icon/icongas.png',
            iconSize:     [34, 38], // size of the icon
            iconAnchor:   [22, 35], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
          });
        // Create a GeoJSON layer and add it to the map
        const searchLayer = L.geoJSON().addTo(map);

        // Fetch data from the Laravel route
        $.getJSON('/titik/json', function (data) {
            $.each(data, function (index) {
                // HTML for popup
                var html = '<div class="bg-indigo-700 border-2 border-teal-600 p-3 max-w-md mx-auto shadow-lg rounded-md">';
                html += '<h5 class="mb-1 text-lg font-semibold text-white">Nama Lokasi: ' + data[index].nama + ' </h5>';
                html += '<h5 class="mb-2 text-sm text-gray-800">Alamat: ' + data[index].alamat + ' </h5>';
                html += '<h5 class="mb-2 text-sm text-blue-200">Pertamax: ' + data[index].pertamax + ' </h5>';
                html += '<h5 class="mb-2 text-sm text-green-200">Pertalite: ' + data[index].pertalite + ' </h5>';
                html += '<h5 class="mb-2 text-sm text-yellow-200">Pertamax Turbo: ' + data[index].pertamax_turbo + ' </h5>';
                html += '<h5 class="mb-2 text-sm text-red-200">Solar: ' + data[index].solar + ' </h5>';
                html += '<img class="max-w-full mt-2 rounded-md" src="images/' + data[index].image + '">';
                html += '<a href="{{url('transaction')}}"><button onclick="redirectToPayment()" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-1 px-2 rounded-full block mt-2">Buy Now</button></a>';
                html += '</div>';

                // Create a marker and add it to the map
                L.marker([parseFloat(data[index].latitude), parseFloat(data[index].longitude)], {
                    icon: gasIcon,
                    title: data[index].nama
                })
                    .addTo(map)
                    .bindPopup(html); 
            });

            // Add the retrieved GeoJSON data to the searchLayer
            searchLayer.addData(data);

            // Create a search control and add it to the map
            const searchControl = new L.Control.Search({
                layer: searchLayer,
                propertyName: "alamat" // Replace with the actual property name in your GeoJSON data
                
            });

            searchControl.addTo(map);
            console.log(searchControl);


            // Optionally, fit the map bounds to the added GeoJSON layer
            map.fitBounds(searchLayer.getBounds());
        });
    });


        
    </script>
</body> 
</html>
