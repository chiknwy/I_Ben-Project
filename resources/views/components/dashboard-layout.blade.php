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
  <title>Map</title>
</head>
<body class="bg-indigo-900">
    <header>
        <div class="px-5">
          <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
            <div class="flex flex-col items-stretch w-[24%] max-md:w-full max-md:ml-0">
              <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}"class="aspect-[1.33] object-contain object-center w-[205px] overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
            </div>
            <div class="flex flex-col items-stretch w-[30%] ml-5 max-md:w-full max-md:ml-0">
              <div class="items-stretch flex justify-between gap-5 my-auto max-md:justify-center max-md:mt-10">
                <div class="text-indigo-700 text-lg font-medium whitespace-nowrap">Home</div>
                <div class="text-black text-lg font-medium">Maps</div>
                <div class="text-indigo-700 text-lg font-medium whitespace-nowrap">Contacts</div>
              </div>
            </div>
            <div class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full max-md:ml-0">
              <div class="bg-gray-200 flex items-center justify-between gap-5 w-full my-auto pl-5 pr-2 py-2 rounded-xl max-md:max-w-full max-md:flex-wrap max-md:mt-10">
                <input type="text" class="text-indigo-700 text-lg font-medium grow whitespace-nowrap my-auto w-full bg-transparent outline-none" placeholder="Search" />
                <div class="bg-teal-300 flex w-12 flex-col justify-center items-center h-12 px-3.5 rounded-xl">
                    <img loading="lazy" src="{{url('img/maps/search.svg')}}" class="aspect-square object-contain object-center w-full overflow-hidden" />
                  </div>              </div>
            </div>
          </div>
        </div>
      </header>
      
      <main>{{$slot}}</main>

      <footer>
        <div class="bg-teal-300 flex flex-col items-stretch px-20 py-12 max-md:px-5">
            <div class="flex justify-between gap-5 ml-3 mr-4 items-start max-md:max-w-full max-md:flex-wrap max-md:mr-2.5">
              <div class="flex basis-[0%] flex-col items-start">
                <div class="text-blue-500 text-lg whitespace-nowrap ml-5 max-md:ml-2.5">I-Ben</div>
                <div class="text-indigo-700 text-lg font-medium self-stretch mt-2.5">We help you find your fuel</div>
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
            <div class="text-indigo-700 text-lg font-medium whitespace-nowrap ml-3 mr-4 mt-24 max-md:max-w-full max-md:mr-2.5 max-md:mt-10">2023 all Right Reserved Term of use I-Ben</div>
          </div>
    </footer>






    <script>
      	const map = L.map('map').setView([-8.116167984286907, 115.08773688558952], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
           attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
</body> 

</html>
