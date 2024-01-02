<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>PAYMENT</title>
</head>

<body class="bg-gray-100">
  <header class="py-0 md:py-1 bg-indigo-900">
    <div class="px-5">
      <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
        <div class="flex flex-col items-stretch w-[24%] max-md:w-full max-md:ml-0">
          <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" class="aspect-[1.33] object-contain object-center w-[150px] overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
        </div>
        <div class="flex flex-col items-stretch w-[30%] ml-5 max-md:w-full max-md:ml-0">
          <div class="items-stretch flex justify-between gap-5 my-auto max-md:justify-center max-md:mt-10">
            <a href="{{url('/home')}}" class="text-indigo-500 text-lg font-medium whitespace-nowrap">Home</a>
            <a href="{{url('/maps')}}"><div class="text-indigo-500 text-lg font-medium whitespace-nowrap" >Maps</div></a>
            <a href=""  class="text-black text-lg font-medium" >Payment</a>
        </div>
      </div>
        
      </div>
    </div>
  </header>
    <div class="container mx-auto px-4 py-8">
        {{-- <!-- Header Section -->
            <div class="flex items-center mb-8 justify-between ">
                <!-- Payment Details Section -->
                <div class="bg-indigo-900 py-6 mb-8 rounded-lg text-center flex-grow">
                    <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" class="aspect-[1.33] object-contain object-center w-[150px] overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
                </div>
            </div> --}}

        <!-- Order Details Section -->
        
        <form method="post" action="{{ route('process') }}">
          @csrf
          @if (Auth::check())
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

              
          
          <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" required name="nama" class="form-control" id="nama" value="{{Auth::user()->name}}">
          </div>

          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" required name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" >
          </div>
          
          <div class="form-group">
            <label for="nohp">No Hp :</label>
            <input type="text" required name="nohp" class="form-control" id="nohp" value="{{ Auth::user()->phone }}" >
          </div>
          <label for="PilihBensin">Pilih Jenis Bensin</label>

          <select class="form-control" aria-label=".form-select-lg example" name="bensin">
            <option value="PERTALITE">PERTALITE</option>
            <option value="PERTAMAX">PERTAMAX</option>
            <option value="SOLAR">SOLAR</option>
            <option value="PERTAMAX_TURBO">Pertamax Turbo</option>
          </select>
          
          <div class="form-group">
            <label for="nominal">Nominal :</label>
            <input type="number" required name="nominal" class="form-control" id="nominal" oninput="validateNominal()">
            <div id="nominalError" style="color: red;"></div>
          </div>
          @endif
          <b>metode pembayaram</b>
          @foreach($metode as $m)
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value ="{{$m->code}}" required name="metode">{{$m->name}}
              </label>
          </div>
          @endforeach
          <br>  
            <button type="submit" class="btn btn-success bg-blue-400">Buy</button>
        </form>     
        
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
    <script>
      function validateNominal() {
        var nominalInput = document.getElementById('nominal');
        var errorDiv = document.getElementById('nominalError');
    
        var nominalValue = parseFloat(nominalInput.value);
    
        if (nominalValue < 10000 || isNaN(nominalValue)) {
          errorDiv.textContent = 'Minimum nominal is Rp 10.000';
          nominalInput.setCustomValidity('Invalid');
        }else if (nominalValue > 10000000) {
          errorDiv.textContent = 'Maximum nominal is Rp 10.000.000';
          nominalInput.setCustomValidity('Invalid');
        } 
        else {
          errorDiv.textContent = '';
          nominalInput.setCustomValidity('');
        }
      }
    </script>
</body>

</html>
