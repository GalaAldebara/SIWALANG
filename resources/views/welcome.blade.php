<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <main class="h-screen grid place-content-center" style="background-color: rgb(173, 217, 138)">
    <div class="border rounded-3xl shadow-xl" style="background-color: white">
      <aside class="p-12 flex flex-row">
        <div class="flex flex-col gap-4">
          <div class="">
            SIWALANG
          </div>
          <section>
            <label for="username" class="block text-sm font-medium leading-none text-gray-900">NIK</label>
              <div class="mt-2">
                <input id="username" name="username" type="text" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 bg-gray-300">
              </div>
          </section>
          <section>
            <label for="password" class="block text-sm font-medium leading-none text-gray-900">Password</label>
              <div class="mt-2">
                <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 bg-gray-300">
              </div>
          </section>
          <div class="">
            <button type="submit" class="flex w-full justify-center rounded-md bg-lime-300 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-lime-400">LOG IN</button>
          </div>
        </div>
        <div class="">
          <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="scale-75">
        </div>
      </aside>
    </div>
  </main>
</body>
</html>