<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Login</title>
</head>

<body>
    

<div class="container">
    <div class="bg-indigo-800 bg-opacity-80 pr-16 max-md:pr-5">
        <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
          <div class="flex flex-col items-stretch w-[61%] max-md:w-full max-md:ml-0">
            <div class="bg-teal-300 flex grow flex-col w-full pl-10 pr-20 py-12 max-md:max-w-full max-md:mt-10 max-md:px-5">
              <h1 class="text-indigo-700 text-7xl font-bold leading-[70px] whitespace-nowrap mt-1.5 self-start max-md:max-w-full max-md:text-4xl max-md:leading-10">
                WELCOME TO <br /> I-BEN
                
              </h1>
              <div class="text-indigo-700 text-base font-medium whitespace-nowrap mt-2 self-start max-md:max-w-full">
                Most Efficient Gasoline Shop
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="text-indigo-700 text-5xl font-bold whitespace-nowrap ml-20 mt-20 self-start max-md:text-4xl max-md:ml-2.5 max-md:mt-10">
                    Login
                </h2>
                <div class="text-indigo-700 text-base font-medium whitespace-nowrap ml-20 mt-3 self-start max-md:ml-2.5">
                    Enter your account details
                </div>

                @if($errors->any())
                    <div class="text-red font-medium whitespace-nowrap ml-20 mt-3 self-start max-md:ml-2.5">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="items-stretch flex w-[339px] max-w-full justify-between gap-5 ml-20 mt-6 self-start max-md:ml-2.5">
                    <div class="text-indigo-700 text-opacity-90 text-base grow whitespace-nowrap">
                        <div class="mb-4">
                            <label for="Email" class="block text-sm font-medium text-gray-600"></label>
                            <input placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                   class="border-none mt-1 p-1 block w-full bg-transparent outline-none">
                        </div>
                    </div>
                </div>
                <div class="bg-indigo-700 bg-opacity-40 w-[381px] shrink-0 max-w-full h-px ml-20 mt-3 self-start max-md:ml-2.5"></div>
                <div class="items-stretch flex w-[339px] max-w-full justify-between gap-5 ml-20 mt-6 self-start max-md:ml-2.5">
                    <div class="text-indigo-700 text-opacity-90 text-base grow whitespace-nowrap">
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-600"></label>
                            
                            <input placeholder="Password" id="password" type="password" name="password" required
                                   class="visibility: hidden; border-none mt-1 p-1 w-full bg-transparent outline-none">
                                   <i class="bi bi-eye-slash inline" id="togglePassword" ></i>
                        </div>
                    </div>
                    
                    {{-- <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/a16f34ddf186e8c9fecf985a06b25f70e943483a67293bf1a1998d43f939c575?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"
                        class="aspect-square object-contain object-center w-6 overflow-hidden z-[1] shrink-0 max-w-full"
                    /> --}}
                </div>
                <div class="bg-indigo-700 bg-opacity-40 w-[381px] shrink-0 max-w-full h-px ml-20 mt-3 self-start max-md:ml-2.5"></div>

                <div class="mb-4">
                    <br>
                    <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded-md font-Poppins">
                        Login
                    </button>
                </div>
                </form>
              <div class="items-center self-center flex w-[407px] max-w-full justify-between gap-5 mt-4 pr-20 max-md:pr-5">
                <div class="text-indigo-500 text-base grow whitespace-nowrap my-auto">
                  Don’t have an account?
                  <a href="{{route('home')}}"><br><div 
                    class="text-indigo-500 font-medium">
                    Login as Guest
                  </div>
                  </a>
                </div>
                <a href="{{ route('register') }}" class="text-gray-200 text-base whitespace-nowrap justify-center items-center bg-indigo-900 self-stretch grow pl-7 pr-1 py-3 rounded-lg">
                    <span class="flex items-center">  Sign Up</span>
                </a>
              </div>
              <div class="text-indigo-500 text-lg font-medium text-base self-center whitespace-nowrap mt-6 max-md:max-w-full">
                Forgot Password?
            </div>
            </div>
          </div>
          <div class="flex flex-col items-stretch w-[39%] ml-5 max-md:w-full max-md:ml-0">
           
            <img
              loading="lazy"
              src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" 
              class="aspect-square object-contain object-center w-full overflow-hidden my-auto max-md:max-w-full max-md:mt-10"
            />
          </div>
        </div>
    </div>
</div>
<script>
  const togglePassword = document.querySelector("#togglePassword");
  const password = document.querySelector("#password");

  togglePassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      
      // toggle the icon
      this.classList.toggle("bi-eye");
  });

  // prevent form submit
  // const form = document.querySelector("form");
  // form.addEventListener('submit', function (e) {
  //     e.preventDefault();
  // });
</script>
</body>
</html> 