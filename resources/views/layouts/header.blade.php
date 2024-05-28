<div class="flex flex-row justify-center bg-cover bg-center min-h-64 bg-desa-langlang bg-black/50 bg-blend-multiply">
    <div class="absolute w-5/6">
        <div class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4 mr-1">
                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
            </svg>
            </p>Kec.Singosari, Kab.Malang, Jawa Timur<p>
        </div>
        <nav class="bg-white w-full rounded-lg flex felx-row justify-between min-w-max">
            <div class="flex flex-row items-center pl-8">
                <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
            </div>
            <div class="flex flex-row items-center pr-8">
                <a class="group font-bold px-7 text-walang transition-all duration-300 ease-in-out" href="{{ url('warga') }}" >
                    <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        BERANDA
                    </span>
                </a>
                <a class="group font-bold px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('warga') }}" >
                    <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        NOTIFIKASI
                    </span>
                </a>
                <a class="group font-bold px-7 text-black transition-all duration-300 ease-in-out" href="{{ url('logout') }}" >
                    <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        LOGOUT
                    </span>
                </a>
            </div>
        </nav>
        <header class="text-white/80">
            <ol class="flex  font-light py-5" style="font-family: Asap">
                    @foreach ($header->list as $key => $value)
                        @if ($key == count($header->list) - 1)
                            <li class="">{{ $value }}</li>
                        @else
                            <li class="">{{ $value }}</li>
                            <p class="px-3">/</p>
                        @endif
                    @endforeach
            </ol>
            <p class="text-white font-bold text-3xl">{{ $header->title }}</p>
        </header>
    </div>
</div>
