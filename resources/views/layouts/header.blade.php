<div class="flex flex-row justify-center bg-cover bg-center min-h-36 md:min-h-64 bg-desa-langlang bg-black/50 bg-blend-multiply">
    <div class="absolute w-5/6">
        <a href="https://maps.app.goo.gl/DPopJXQ6Hp1bLQDG9" target="_blank" rel="noopener noreferrer" class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4 mr-1">
                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
            </svg>
            <p class="hidden md:block">Kec.Singosari, Kab.Malang, Jawa Timur</p>
            <p class="md:hidden">Lang-Lang</p>
        </a>
        <nav class="bg-white w-full rounded-lg flex felx-row justify-between">
            <div class="md:flex flex-row items-center pl-8 hidden">
                <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
            </div>
            <div class="flex flex-row items-center px-7 py-6">
                <a class="group font-bold px-3 md:px-7 text-walang transition-all duration-300 ease-in-out" href="{{ url('warga') }}">
                    <span class="bg-gradient-to-r from-walang to-walang bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        BERANDA
                    </span>
                </a>
                @if(auth()->user()->level_id != 2)
                </button>
                <button class="group font-bold px-4 md:px-7 text-black transition-all duration-300 ease-in-out text-xs md:text-base" id="notif" >
                    <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        NOTIFIKASI
                    </span>
                </button>
                @endif
                <a class="relative group font-bold px-4 md:px-7 text-black transition-all duration-300 ease-in-out text-xs md:text-base" href="{{ url('logout') }}" >
                    <span class="bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]" style="font-family: Asap">
                        LOGOUT\
                    </span>
                    @if($notificationCount > 99)
                        <div class="flex justify-end items-center absolute -top-2 -left-7 bg-yellow-400 px-[5px] rounded-xl h-4" style="font-size: 10px; font-family: Asap">
                            <span>99</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </div>
                    @elseif ($notificationCount == 0)
                        <div></div>
                    @else
                        <div class="flex justify-end items-center absolute -top-2 -left-7 bg-yellow-400 px-[5px] rounded-xl h-4" style="font-size: 10px; font-family: Asap;">
                            <span>{{$notificationCount}}</span>
                        </div>
                    @endif
                </a>
            </div>
        </nav>
        <header class="text-white/80 hidden md:block">
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
<script>
    @auth
        document.addEventListener('DOMContentLoaded', function () {
            var level_id = {{ Auth::user()->level_id }};
            var notif = document.getElementById('notif');
            notif.addEventListener('click', function (event) {
                event.preventDefault();

                var url = '';

                if (level_id === 4) {
                    url = '/warga_notifikasi';
                } else if (level_id === 3) {
                    url = '/rt_notifikasi';
                }

                window.location.href = url;
            });
        });
    @endauth
</script>
