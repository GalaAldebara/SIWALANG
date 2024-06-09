@extends('layouts.template')

@section('content')
<div class="w-full flex flex-row justify-center gap-x-6 py-3">
    <button id="showTable1" class="bg-button text-white rounded-md px-4 py-2 my-2">Data Pemonon Bansos</button>
    <button id="showTable2" class="bg-gray-400 text-white rounded-md px-4 py-2 my-2">Data Penerima Bansos</button>
</div>

<main class="w-full h-full mb-3">
    <div class="flex flex-col items-center py-3 min-w-fit">
        <div class="w-5/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('warga') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
            </a>
            <p style="font-family: Inter" class="px-4">Data Warga</p>
        </div>
        <div class="w-5/6 flex flex-col items-center rounded-b-xl border-2 min-w-[490px] px-6">
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
                        <button id="button_skor" class="bg-blue-700 font-semibold text-white rounded-md px-2 py-1 my-1 flex-row items-center cursor-pointer hidden">
                            HITUNG SKOR
                        </button>
                        <button id="button_rank" class="bg-blue-700 font-semibold text-white rounded-md px-2 py-1 my-1 flex-row items-center cursor-pointer hidden">
                            PERANKINGAN
                        </button>
                    </div>
                    <table class="table-auto border-separate border border-gray-300 w-full" id="table_pemohon" style="width: 100%">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300" style="font-family: Asap">ID</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NIK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NAMA</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. KK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. TELP</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">SKOR</th>
                            </tr>
                        </thead>
                    </table>
                    <table class="table-auto border-separate border border-gray-300 hidden" id="table_penerima" style="width: 100%">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300" style="font-family: Asap">ID</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NIK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NAMA</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. KK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. TELP</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">AKSI</th>
                            </tr>
                        </thead>
                    </table>
            </div>
        </div>
    </div>
</main>
@endsection

@push('css')
<style>
    .asap {
        font-family: Asap;
    }
</style>
@endpush

@push('js')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const table1 = document.getElementById("table_pemohon");
    const table2 = document.getElementById("table_penerima");
    const button = document.getElementById("button_skor");
    const button2 = document.getElementById("button_rank");
    const showTable1 = document.getElementById("showTable1");
    const showTable2 = document.getElementById("showTable2");
    let dataPengaduan;

    showTable1.addEventListener("click", function() {
        table1.classList.remove("hidden");
        table2.classList.add("hidden");
        button.classList.remove("hidden");
        button.classList.add("flex");
        button2.classList.add("hidden");
        button2.classList.remove("flex");
        showTable1.classList.remove("bg-gray-400");
        showTable1.classList.add("bg-button");
        showTable2.classList.add("bg-gray-400");

        if (!$.fn.DataTable.isDataTable('#table_pemohon')) {
            dataPengaduan = $('#table_pemohon').DataTable({
                "lengthMenu": [[-1], ["All"]],
                "searching": false,
                "processing": true,
                "serverSide": true,
                "info": false,
                "paging": false,
                "lengthChange": false,
                "autoWidth": true,
                "language": {
                    "emptyTable": "",
                    "zeroRecords": ""
                },
                ajax: {
                    url: "{{ route('pemohon_list') }}",
                    dataType: 'json',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                },
                columns: [
                    { data: 'DT_RowIndex', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
                    { data: 'nik', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
                    { data: 'nama', orderable: false, searchable: false, className: "text-center asap border-t-2" },
                    { data: 'no_kk', orderable: false, searchable: false, className: "text-center py-3 asap border-t-2" },
                    { data: 'no_telp', orderable: true, searchable: true, className: "text-center asap border-t-2" },
                    { data: 'skor', orderable: true, searchable: false, className: "text-center asap border-t-2" },
                ],
                "initComplete": function(settings, json) {
                    $('#table_pemohon').removeClass('hidden');
                }
            });
        }
    });

    showTable2.addEventListener("click", function() {
        table1.classList.add("hidden");
        table2.classList.remove("hidden");
        button.classList.add("hidden");
        button.classList.remove("flex");
        button2.classList.remove("hidden");
        button2.classList.add("flex");
        showTable2.classList.remove("bg-gray-400");
        showTable2.classList.add("bg-button");
        showTable1.classList.add("bg-gray-400");

        if (!$.fn.DataTable.isDataTable('#table_penerima')) {
            dataPengaduan = $('#table_penerima').DataTable({
                "lengthMenu": [[10], [10]],
                "searching": false,
                "processing": true,
                "serverSide": true,
                "info": false,
                "paging": false,
                "lengthChange": false,
                "autoWidth": true,
                "language": {
                    "emptyTable": "",
                    "zeroRecords": ""
                },
                ajax: {
                    url: "{{ route('penerima_list') }}",
                    dataType: 'json',
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                },
                columns: [
                    { data: 'DT_RowIndex', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
                    { data: 'nik', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
                    { data: 'nama', orderable: false, searchable: false, className: "text-center asap border-t-2" },
                    { data: 'no_kk', orderable: false, searchable: false, className: "text-center py-3 asap border-t-2" },
                    { data: 'no_telp', orderable: true, searchable: true, className: "text-center asap border-t-2" },
                    { data: 'aksi', orderable: true, searchable: false, className: "text-center asap border-t-2" },
                ],
                "initComplete": function(settings, json) {
                    $('#table_penerima').removeClass('hidden');
                }
            });
        }
    });
    function pressButton1() {
        showTable1.click();
    }

    function pressButton2() {
        showTable2.click();
    }
    
    pressButton1();
    // pressButton2();

    // button
    const buttonSkor = document.getElementById("button_skor");

    buttonSkor.addEventListener("click", function() {
        fetch("{{ route('hitung.skor') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: 'Sukses',
                    text: 'Skor berhasil dihitung dan disimpan ke database.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.reload();
                });
            } else {
                Swal.fire({
                    title: 'Kesalahan',
                    text: 'Terjadi kesalahan saat menghitung skor: ' + data.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Kesalahan',
                text: 'Terjadi kesalahan saat menghitung skor.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });

    const buttonRank = document.getElementById("button_rank");

    buttonRank.addEventListener("click", function() {
        // Prompt the user to enter the number of top scores they want to consider
        const topScores = prompt("Enter the number of top scores to consider:");

        // Check if the user entered a valid number
        if (topScores !== null && !isNaN(topScores) && topScores !== '') {
            // Send an AJAX request to the server
            fetch("{{ route('perankingan') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ topScores: topScores })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // location.reload();
                    // pressButton2();
                } else {
                    // Show error message if ranking failed
                    Swal.fire({
                        title: 'Error',
                        text: 'Failed to rank applicants: ' + data.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error',
                    text: 'Failed to rank applicants.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        } else {
            // Show an error message if the user didn't enter a valid number
            Swal.fire({
                title: 'Error',
                text: 'Please enter a valid number of top scores.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
});
</script>
@endpush
