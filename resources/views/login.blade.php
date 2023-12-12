<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
    <header class="bg-indigo-800 bg-opacity-80 pr-16 max-md:pr-5">
        <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
          <div class="flex flex-col items-stretch w-[61%] max-md:w-full max-md:ml-0">
            <div class="bg-teal-300 flex grow flex-col w-full pl-10 pr-20 py-12 max-md:max-w-full max-md:mt-10 max-md:px-5">
              <h1 class="text-indigo-700 text-7xl font-bold leading-[70px] whitespace-nowrap mt-1.5 self-start max-md:max-w-full max-md:text-4xl max-md:leading-10">
                WELCOME TO <br /> I-BEN
              </h1>
              <div class="text-indigo-700 text-base font-medium whitespace-nowrap mt-2 self-start max-md:max-w-full">
                Most Efficient Gasoline Shop
              </div>
              <h2 class="text-indigo-700 text-5xl font-bold whitespace-nowrap ml-20 mt-20 self-start max-md:text-4xl max-md:ml-2.5 max-md:mt-10">
                Login
              </h2>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-indigo-700 text-base font-medium whitespace-nowrap ml-20 mt-3 self-start max-md:ml-2.5">
                  Enter your account details
                </div>
                <div class="text-indigo-700 text-opacity-90 text-base self-center whitespace-nowrap mt-12 max-md:max-w-full max-md:mt-10">
                  Username
                </div>
                <div class="bg-indigo-700 bg-opacity-40 w-[381px] shrink-0 max-w-full h-px ml-20 mt-3 self-start max-md:ml-2.5"></div>
                <div class="items-stretch flex w-[339px] max-w-full justify-between gap-5 ml-20 mt-6 self-start max-md:ml-2.5">
                  <div class="text-indigo-700 text-opacity-90 text-base grow whitespace-nowrap">
                    Password
                  </div>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/a16f34ddf186e8c9fecf985a06b25f70e943483a67293bf1a1998d43f939c575?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"
                    class="aspect-square object-contain object-center w-6 overflow-hidden z-[1] shrink-0 max-w-full"
                  />
                </div>
              <div class="bg-indigo-700 bg-opacity-40 w-[381px] shrink-0 max-w-full h-px ml-20 mt-3 self-start max-md:ml-2.5"></div>
              <div class="text-indigo-700 text-opacity-90 text-base self-center whitespace-nowrap mt-6 max-md:max-w-full">
                Forgot Password?
              </div>
              <button class="text-indigo-700 text-base font-bold whitespace-nowrap justify-center items-center bg-blue-500 self-center w-[393px max-w-full mt-12 px-16 py-3 rounded-xl max-md:mt-10 max-md:px-5">
                Login
              </button>
              <div class="items-center self-center flex w-[407px] max-w-full justify-between gap-5 mt-4 pr-20 max-md:pr-5">
                <div class="text-gray-200 text-base grow whitespace-nowrap my-auto">
                  Don’t have an account?
                </div>
                <div class="text-gray-200 text-base whitespace-nowrap justify-center items-stretch bg-indigo-900 self-stretch grow pl-5 pr-1 py-3 rounded-lg">
                  Sign up
                </div>
              </div>
              <div class="text-gray-200 text-base whitespace-nowrap justify-center items-stretch bg-teal-300 ml-24 mb-32 py-3 rounded-lg self-start max-md:ml-2.5 max-md:mb-10">
                Login as Guest
              </div>
            </div>
          </div>
          <div class="flex flex-col items-stretch w-[39%] ml-5 max-md:w-full max-md:ml-0">
            <form method="POST" action="{{ route('login') }}">
              @csrf
  
              <div class="mb-4">
                  <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                  <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                         class="mt-1 p-2 block w-full border rounded-md">
              </div>
  
              <div class="mb-4">
                  <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                  <input id="password" type="password" name="password" required
                         class="mt-1 p-2 block w-full border rounded-md">
              </div>
  
              <div class="mb-4">
                  <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded-md">
                      Login
                  </button>
              </div>
          </form>
            <img
              loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/40ae704e9c1b6d36240cc3982779d26ce50f6597f54d013361cab17ad156be87?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&"class="aspect-square object-contain object-center w-full overflow-hidden my-auto max-md:max-w-full max-md:mt-10"
            />
          </div>
        </div>
      </header>
</body>
</html>