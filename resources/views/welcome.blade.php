<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap">
</head>
<body>
  <div class="h-screen flex flex-wrap justify-center content-center" style="background-color: rgb(173, 217, 138)">
    <div class="rounded-3xl grid grid-cols-3 " style="background-color: white; box-shadow: rgba(14, 30, 37, 0.12) 0px 0px 0px 0px, rgba(14, 30, 37, 0.32) 0px 0px 20px 0px;">
      
      <div class="p-10 col-span-2 flex flex-col gap-4">
        <div class="flex flex-row text-3xl font-black" style="font-family: Inter">
          <p style="color: rgb(65, 184, 90)">
            SI
          </p>
          <p style="color: rgb(0, 86, 47)">
            WALANG
          </p>
        </div>
        <div>
          <label for="username" class="block text-sm font-bold leading-none text-gray-600">NIK</label>
          <div class="mt-2">
            <input id="username" name="username" type="text" placeholder="Masukkan NIK anda" autocomplete="username" required class="w-full rounded-md border-0 py-1 px-4 focus:ring-2 focus:ring-lime-400 focus:outline-none text-gray-900 bg-gray-300">
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-bold leading-none text-gray-600">Password</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" placeholder="Masukkan password anda" required class="w-full rounded-md border-0 py-1 px-4 focus:ring-2 focus:ring-lime-400 focus:outline-none text-gray-900 bg-gray-300">
          </div>
        </div>
        <div class="pt-3">
          <button type="submit" class="flex w-full justify-center rounded-md bg-lime-300 px-3 py-1.5 text-sm font-bold leading-6 text-black shadow-sm hover:bg-lime-400" style="font-family: Inter">LOG IN</button>
        </div>
      </div>

      <div class="flex flex-col justify-center" style="background-color: rgb(173, 217, 138); border-radius: 100% 42px 42px 100%">
        <div>
          <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="scale-50">
        </div>
      </div>

    </div>
  </div>
</body>
</html>