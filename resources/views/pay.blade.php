<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <title>PAYMENT</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
            <div class="flex items-center mb-8 justify-between ">
                <!-- Payment Details Section -->
                <div class="bg-indigo-900 py-6 mb-8 rounded-lg text-center flex-grow">
                    <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" class="aspect-[1.33] object-contain object-center w-[150px] overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
                </div>
            </div>

        <!-- Order Details Section -->
        
                        <div class="py-6 mb-8 rounded-lg text-center flex justify-center items-center"> <!-- Menengahkan konten di tengah layar -->
                            <div class="bg-white border border-[color:var(--Body-Light-grey,#EEF2F7)] shadow mx-auto self-center z-[1] flex w-[90%] max-w-full flex-col pl-6 pr-20 py-6 rounded-2xl border-solid items-start max-md:px-5">
                                
                                <h1 class="text-gray-900 text-lg font-bold leading-6 max-md:max-w-full items-center mb-6"> Order #1646988613_694623663 </h1>
                                    
                                <div class="justify-between items-stretch flex w-[552px] max-w-full gap-5 mt-6 max-md:flex-wrap">
                                    <!-- Harga -->
                                    <div class="flex flex-wrap">
                    <div class="w-1/2 pr-8"> <!-- Menambahkan padding di sisi kanan untuk menjauhkan deskripsi dari label harga -->
                        <div class="mt-6">
                            <label for="harga" class="block text-sm font-semibold text-gray-900">Masukkan Harga:</label>
                            <input type="text" id="harga" name="harga" class="text-gray-900 text-5xl font-semibold leading-9 border border-gray-300 rounded-md mt-2 p-2 w-full" placeholder="Rp. 0">
                        </div>
                    </div>
                    
                    <div class="w-1/2 pl-4">
                        <!-- Deskripsi -->
                        <div class="mt-6">
                            <label for="jenisBbm" class="block text-sm font-semibold text-gray-900 leading-6 whitespace-nowrap"> Description </label>
                            <input type="text" id="jenisBbm" name="jenisBbm" class="text-gray-900 text-3xl font-semibold leading-6 border border-gray-300 rounded-md mt-2 p-2 w-full" placeholder="Jenis BBM">
                        </div>
                    </div>
                </div>

                    
                </div>
                <h2 class="text-gray-900 text-3xl mt-5 font-semibold mb-4 justify-center">Select a payment method:</h2>
                <form>
                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="ovo" class="mr-2">
                        <label for="ovo" class="text-indigo-900 text-base font-medium">OVO</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="dana" class="mr-2">
                        <label for="dana" class="text-indigo-900 text-base font-medium">Dana</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="gopay" class="mr-2">
                        <label for="gopay" class="text-indigo-900 text-base font-medium">Gopay</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="bank-transfer" class="mr-2">
                        <label for="bank-transfer" class="text-indigo-900 text-base font-medium">Bank Transfer</label>
                    </div>
                </form>
            </div>
                
        </div>

        <!-- Confirm Button -->
        <div class="flex justify-center">
            <a href="/barcode" class="bg-green-500 text-white px-8 py-4 rounded-lg text-sm font-bold">Confirm</a>
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
</body>

</html>
