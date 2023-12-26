<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage</title>
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
                <a href="" class="text-black text-lg font-medium">Home</a>
                <a href="{{url('/maps')}}"><div class="text-indigo-500 text-lg font-medium whitespace-nowrap" >Maps</div></a>
                <a href="" class="text-indigo-500 text-lg font-medium whitespace-nowrap">Contacts</a>
                @if (Auth::check())
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold text-indigo-500 hover:underline">Logout</button>
                  </form>
                @else
                  <a href="{{ route('login') }}"><div class="text-white text-lg font-medium whitespace-nowrap">LOGIN</div></a>
                      <a href="{{ route('register') }}"><button  class="text-white text-lg font-medium whitespace-nowrap bg-teal-500 w-24 h-8 rounded-lg">SIGN UP</button></a>
                    </div>
                @endif
              </div>
            </div>
           
          </div>
        </div>
    </header>
    
      <div class="bg-teal-300 mt-0 ml-3.5 mr-4 pl-12 pr-20 pt-12 rounded-3xl max-md:max-w-full max-md:mr-2.5 max-md:px-5">
        <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
            <div class="flex flex-col items-stretch w-3/5 max-md:w-full max-md:ml-0">
            <div class="flex flex-col items-start max-md:max-w-full max-md:mt-10">
                <h1 class="text-indigo-700 text-6xl font-extrabold leading-[64px] self-stretch whitespace-nowrap max-md:max-w-full max-md:text-4xl max-md:leading-10 max-md:mr-1"> Search your nearest <br /> Gas Station </h1>
                <div class="items-stretch flex w-[350px] max-w-full justify-between gap-5 mt-6 px-0.5">
                <div class="items-stretch flex grow basis-[0%] flex-col">
                    <div class="text-stone-900 text-3xl font-medium whitespace-nowrap">50+</div>
                    <div class="text-stone-900 text-lg font-medium whitespace-nowrap">Gas Station Partner</div>
                </div>
                <div class="items-stretch flex basis-[0%] flex-col">
                    <div class="text-stone-900 text-3xl font-medium whitespace-nowrap">100+</div>
                    <div class="text-stone-900 text-lg font-medium whitespace-nowrap">Users</div>
                </div>
                </div>
                <div class="self-stretch flex justify-between gap-5 mt-11 items-start max-md:max-w-full max-md:flex-wrap max-md:mt-10">
                    <div class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full max-md:ml-0">
                        <div class="bg-gray-200 flex items-center justify-between gap-5 w-full my-auto pl-5 pr-2 py-2 rounded-xl max-md:max-w-full max-md:flex-wrap max-md:mt-10">
                        <input type="text" class="text-indigo-700 text-lg font-medium grow whitespace-nowrap my-auto w-full bg-transparent outline-none" placeholder="Search" />

                        <a href="{{url('/maps')}}"><div class="bg-teal-300 flex w-1/2 md:w-12 flex-col justify-center items-center h-12 px-3.5 rounded-xl">
                            <img loading="lazy" src="{{url('img/maps/search.svg')}}" class="aspect-square object-contain object-center w-full overflow-hidden" />
                        </div>  </a>            

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="flex flex-col items-stretch w-2/5 ml-5 max-md:w-full max-md:ml-0">
            <div class="bg-stone-900 flex grow flex-col w-full mt-20 pt-12 pb-6 px-16 rounded-[200px_200px_0px_200px] items-end max-md:max-w-full max-md:mt-10 max-md:px-5">

                <img loading="lazy" src="{{URL('img/Homepage/image-3.png')}}"class="aspect-[0.9] object-contain object-center w-[267px] overflow-hidden max-w-full mt-4" />

            </div>
            </div>
        </div>
    </div>

    {{-- about us --}}

    

    <div class="text-teal-300 text-6xl font-bold self-center max-w-[726px] mt-36 max-md:max-w-full max-md:text-4xl max-md:mt-10">
        Collaborate With :
      </div>
      <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/0811f4cf2fdd9c0625aeed7e8dbbd25021dcedd72b4d9d5036514f0b94e382a8?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"class="aspect-[2.2] object-contain object-center w-[758px] overflow-hidden self-center max-w-full mt-1 mb-9" />
    
      <div class="justify-center items-stretch bg-gray-200 flex w-full flex-col px-20 py-12 max-md:max-w-full max-md:px-5">
        <h1 class="text-stone-900 text-3xl font-bold self-center whitespace-nowrap mt-8">About us</h1>
        <h2 class="text-indigo-700 text-lg font-medium self-center whitespace-nowrap mt-3">Buy any gas anywhere you want!</h2>
        <div class="mt-12 mb-8 mx-4 max-md:max-w-full max-md:mr-2.5 max-md:mt-10">
          <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
            <div class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0">
              <div class="items-stretch flex grow flex-col max-md:mt-6">
                <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/61afac70b20b31f83c7537d97dd08713e094258250a8c1fac39c68e39c6ab1f1?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"class="aspect-square object-contain object-center w-24 overflow-hidden self-center max-w-full" />
                <h3 class="text-blue-500 text-lg font-bold self-center whitespace-nowrap mt-6">Large Assortment</h3>
                <div class="text-indigo-700 text-center text-lg font-medium mt-3">We will help you find any available gasoline in your area!</div>
              </div>
            </div>
            <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
              <div class="items-stretch flex flex-col max-md:mt-6">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d97dbba617550116fbcd22183cf4e5c237dd4b25ae7f1fc4fcf8e6bed7c90d1a?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-24 overflow-hidden self-center max-w-full" />
                <h3 class="text-blue-500 text-lg font-bold self-center whitespace-nowrap mt-6">Efficient Gasoline E-Commerce</h3>
                <div class="text-indigo-700 text-center text-lg font-medium mt-3">Easy to access easy to buy!</div>
              </div>
            </div>
            <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
              <div class="items-stretch flex grow flex-col max-md:mt-6">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a3491c7a169bab7decd961926bb6ae6965602089e5cb4664865af181a6c61fa0?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-24 overflow-hidden self-center max-w-full" />
                <h3 class="text-blue-500 text-lg font-bold self-center whitespace-nowrap mt-6">24/7 Support</h3>
                <div class="text-indigo-700 text-center text-lg font-medium mt-3">answers to any business related inquiry 24/7 and in real-time.</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="justify-end items-stretch bg-gray-200 flex w-full flex-col pt-8 px-5 max-md:max-w-full">
        <h1 class="text-stone-900 text-4xl font-bold self-center whitespace-nowrap">Products</h1>
        <h2 class="text-indigo-700 text-3xl font-medium self-center whitespace-nowrap mt-3 max-md:max-w-full">Find what you are looking for</h2>
        <div class="flex-col overflow-hidden relative flex min-h-[843px] w-full justify-center items-center mt-8 px-16 py-12 max-md:max-w-full max-md:px-5">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4816bd0a8b0e79222c49c4818cfd6a88a5fcd588087aab410a95363478040ec4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"class="absolute h-full w-full object-cover object-center inset-0" />
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/aef82a9a659e4e1cdbb9842a13e6c748322ddaebacbeb9c137b87eafc2118d70?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"class="aspect-[3.43] object-contain object-center w-[634px] overflow-hidden max-w-full mt-52 mb-64 max-md:my-10" />
        <br>
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
            <div class="text-indigo-700 text-lg font-medium whitespace-nowrap ml-3 mr-4 mt-24 max-md:max-w-full max-md:mr-2.5 max-md:mt-10">2023 all Right Reserved Term of use I-Ben</div>
          </div>
    </footer>

</body>
</html>

