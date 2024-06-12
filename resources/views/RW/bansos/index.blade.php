@extends('layouts.template')

@section('content')
<main class="w-full h-full mb-3">
    <div class="flex flex-col items-center py-3 min-w-fit">
        <div class="w-5/6 bg-primary p-3 text-white rounded-t-xl border-2 font-bold flex flex-row min-w-[490px]">
            <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('RW') }}">
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
                        <button id="button_urut" class="bg-blue-700 font-semibold text-white rounded-md px-2 py-1 my-1 flex-row items-center cursor-pointer">
                            URUTKAN
                        </button>
                    </div>
                    <table class="table-auto border-separate border border-gray-300" id="table_penerima" style="width: 100%">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300" style="font-family: Asap">ID</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NIK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NAMA</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. KK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. TELP</th>
                                <th id="skor_column" class="p-3 border border-gray-300" style="font-family: Asap">SKOR</th>
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
    var table = $('#table_penerima').DataTable({
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
            url: "{{ route('data_penerima_list') }}",
            dataType: 'json',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: function(d) {
                d._token = "{{ csrf_token() }}";
            }
        },
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false, className: "text-center py-3 asap border-t-2" },
            { data: 'nik', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
            { data: 'nama', orderable: true, searchable: true, className: "text-center asap border-t-2" },
            { data: 'no_kk', orderable: true, searchable: true, className: "text-center py-3 asap border-t-2" },
            { data: 'no_telp', orderable: false, searchable: false, className: "text-center asap border-t-2" },
            { data: 'skor', orderable: true, searchable: true, className: "text-center asap border-t-2" },
            { data: 'aksi', orderable: true, searchable: false, className: "text-center asap border-t-2" },
        ],
    });

    $('#button_urut').on('click', function() {
        var currentOrder = table.order();
        var skorColumnIndex = $('#skor_column').index();

        if (currentOrder.length && currentOrder[0][0] === skorColumnIndex) {
            // If already sorted by skor, reverse the order
            table.order([skorColumnIndex, currentOrder[0][1] === 'asc' ? 'desc' : 'asc']).draw();
        } else {
            // Else, sort by skor ascending
            table.order([skorColumnIndex, 'asc']).draw();
        }
    });
});
</script>
@endpush

