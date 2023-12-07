<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Map</title>
</head>
<body class="">
    <header class="px-5 h-auto bg-gray-900 opacity-95 backdrop-blur-sm z-10 bg-indigo-900">
        <nav class="container mx-auto flex flex-wrap items-center justify-between opacity-100">
            <div class="w-full md:w-auto md:flex-shrink-0 relative">
                <img class="w-52 h-44" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" alt="Logo" />
            </div>
            <div class="w-72 h-7 justify-start items-start gap-12 inline-flex">
                <div class="text-indigo-700 text-lg font-medium font-Poppins">Home</div>
                <div class="text-black text-lg font-medium font-Poppins">Maps</div>
                <div class="text-indigo-700 text-lg font-medium font-Poppins">Contacts</div>
              </div>
            <div class="relative md:w-[449px]">
                <input type="text" class="w-full md:w-[449px] h-16 bg-gray-200 rounded-xl pl-10 pr-2 border border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Search...">
                <div class="w-12 h-12 left-[393px] top-[8px] absolute bg-teal-300 rounded-xl md:hidden"></div>
                <div class="w-5 h-5 left-[407px] top-[22px] absolute md:hidden"><img src="{{url('img/maps/search.svg')}}" alt=""></div>
            </div>
        </nav>
    </header>
    

    {{-- Maps Here! --}}
    <div class="top-[20px]">
        <img class=" " src="https://via.placeholder.com/1440x843" />
    </div>

    
    
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
</body>
</html>
