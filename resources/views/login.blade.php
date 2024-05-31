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
        <div class="rounded-3xl grid md:grid-cols-3 grid-cols-2" style="background-color: white; box-shadow: rgba(14, 30, 37, 0.12) 0px 0px 0px 0px, rgba(14, 30, 37, 0.32) 0px 0px 20px 0px;">
            <div class="md:p-10 p-10 pt-0 col-span-2 flex flex-col gap-4 order-2 md:order-1">
                <div class="flex flex-row text-3xl font-black justify-center md:justify-start" style="font-family: Inter">
                    <p style="color: rgb(65, 184, 90)">
                        SI
                    </p>
                    <p style="color: rgb(0, 86, 47)">
                        WALANG
                    </p>
                </div>
                @error('login_gagal')
                <div class="justify-between flex bg-red-200 rounded-lg p-3" role="alert" id="alert-box">
                    <span class="text-red-800" style="font-family: Inter">{{ $message }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#b56668" class="size-4">
                            <path d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                        </svg>                                                    
                    </button>
                </div>
                @enderror
                <form action="{{ route('proses_login') }}" method="post">
                    @csrf
                    <div>
                        <label for="login" class="block text-sm font-bold leading-none text-gray-600">NIK atau Username</label>
                        <div class="mt-2">
                            <input id="login" name="login" type="text" placeholder="Masukkan NIK anda" autocomplete="off" required class="w-full rounded-md border-0 py-1 px-4 focus:ring-2 focus:ring-lime-400 focus:outline-none text-gray-900 bg-gray-300">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-bold leading-none text-gray-600 mt-4">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" placeholder="Masukkan password anda" required class="w-full rounded-md border-0 py-1 px-4 focus:ring-2 focus:ring-lime-400 focus:outline-none text-gray-900 bg-gray-300">
                        </div>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-lime-300 px-3 py-1.5 text-sm font-bold leading-6 text-black shadow-sm hover:bg-lime-400" style="font-family: Inter">LOG IN</button>
                    </div>
                </form>
            </div>

            <div class="flex-col md:justify-center flex order-1 col-span-2 md:order-2 md:rounded-login md:col-span-1 md:bg-primary-login flex-wrap content-center">
                <div>
                    <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="scale-75 md:scale-50">
                </div>
            </div>

        </div>
    </div>
    <script>
        function closeAlert() {
            document.getElementById('alert-box').style.display = 'none';
        }
    </script>
</body>
</html>