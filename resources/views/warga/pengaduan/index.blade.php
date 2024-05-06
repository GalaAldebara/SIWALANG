<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
</head>
<body>
    <div class="h-screen flex flex-col justify-between">
        <div class="flex flex-row justify-center bg-cover bg-center min-h-64 bg-desa-langlang bg-black/50 bg-blend-multiply">
            <div class="absolute w-5/6">
                <div class="flex flex-row justify-end text-white text-sm py-2 mt-1 font-thin" style="font-family: Asap">
                    </p>Kec.Singosari, Kab.Malang, Jawa Timur<p>
                </div>
                <nav class="bg-white w-full rounded-lg flex felx-row justify-between min-w-max">
                    <div class="flex flex-row items-center pl-8">
                        <img src="{{ asset('img/logo-lang2.png') }}" alt="lang-lang" class="max-h-20 pr-3 py-2">
                        <h1 class="text-si text-3xl font-black" style="font-family: Inter">SI</h1>
                        <h1 class="text-walang text-3xl font-black" style="font-family: Inter">WALANG</h1>
                    </div>
                    <div class="flex flex-row items-center pr-8">
                        <a class="font-bold px-7 text-walang" href="" style="font-family: Asap">BERANDA</a>
                        <a class="font-bold px-7" href="" style="font-family: Asap">MENU</a>
                        <a class="font-bold px-7" href="{{ url('logout') }}" style="font-family: Asap">LOGOUT</a>
                    </div>
                </nav>
                <header class="text-white/80">
                    <p class="font-light py-5" style="font-family: Asap">Beranda / Pengaduan</p>
                    <p class="text-white font-bold text-3xl">Pengaduan</p>
                </header>
            </div>
        </div>
        <main class="w-full h-full">
            <div class="flex flex-col items-center py-10 min-w-fit">
                <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
                    <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('warga') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                          </svg>                                       
                    </a>
                    <p style="font-family: Inter" class="px-4">Riwayat pengaduan</p>
                </div>              
                <div class="w-4/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
                    <div class="pb-6 mx-6 w-full">
                        <div class="w-full flex flex-row justify-between py-3">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="gray" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                                      </svg>                                  
                                </span>
                                <input class="rounded-3xl pl-10 pr-14 py-2 w-full border border-gray-300" placeholder="Search">
                            </div>
                            <a class="bg-button text-white rounded-md px-2 py-1 my-1 flex flex-row items-center cursor-pointer" href="{{ url('pengaduan/form') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-5">
                                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                                  </svg>
                                  Buat Pengaduan
                            </a>
                        </div>
                        <table class="table-auto border-separate border border-gray-300 w-full" id="table_pengaduan">
                            <thead class="bg-primary-form">
                                <tr class="tracking-wide">
                                    <th class="p-3 border border-gray-300" style="font-family: Asap">TANGGAL PENGADUAN</th>
                                    <th class="p-3 border border-gray-300" style="font-family: Asap">KELUHAN</th>
                                    <th class="p-3 border border-gray-300" style="font-family: Asap">BUKTI</th>
                                </tr>
                            </thead>
                        </table>
                        <script>
                            $(document).ready(function() {
                                var dataPengaduan = $('#table_pengaduan').DataTable({
                                    "lengthMenu": [[10], [10]],
                                    "searching": false,
                                    "processing": true,
                                    "serverSide": true,
                                    "info" : false,
                                    "paging": false,
                                    "lengthChange": false,
                                    ajax: {
                                        url: "{{ route('pengaduan.list') }}",
                                        dataType: 'json',
                                        type: 'POST',
                                    },
                                    columns: [
                                        { data: 'tanggal_pengaduan', orderable: true, searchable: true, className: "text-center" },
                                        { data: 'keluhan', orderable: false, searchable: false, className: "text-center" },
                                        {
                                            data: 'bukti', // nama kolom dalam response JSON dari server
                                            orderable: false,
                                            searchable: false,
                                            className: "text-center",
                                            render: function(data, type, row) {
                                                if (data) {
                                                    return '<a href="#" onclick="showImage(\'' + data + '\')" class="underline underline-offset-2">Bukti</a>';
                                                } else {
                                                    return '';
                                                }
                                            }
                                        }
                                    ]
                                });
                            });

                            function showImage(imageUrl) {
                                var modalHtml = `
                                    <div class="modal fixed left-0 top-0 w-full h-screen bg-black/80 flex items-center justify-center" onclick="closeModal()">
                                        <div class="m-auto">
                                            <img src="{{ asset('img/bukti-pengaduan/') }}/${imageUrl}" class="modal-image max-h-screen" />
                                        </div>
                                    </div>
                                `;
                                $('body').append(modalHtml);      
                            }

                            function closeModal() {
                                $('.modal').remove();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="bg-secondary w-full flex flex-col items-center">
                <div class="w-4/6 text-white my-8">
                    <p class="underline underline-offset-[13px] decoration-[#2a6c12] font-bold">Tentang</p>
                    <p class="mt-5 text-xs text-white/60">SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang SIngosari Malang</p>
                </div>
            </div>
            <div class="w-full flex items-center flex-col bg-primary">
                <div class="w-5/6 flex-row flex justify-between py-2">
                    <p class="text-white/60 text-xs">SIWALANG 2024</p>
                    <p class="text-white/60 text-xs cursor-pointer">Kembali ke atas</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>