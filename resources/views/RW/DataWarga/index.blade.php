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
                        <a id="button_tambah" class="bg-button text-white rounded-md px-2 py-1 my-1 flex-row items-center cursor-pointer hidden" href="{{ url('data_warga/tambah') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                            </svg>
                            Tambah Data
                        </a>
                    </div>
                    <table class="table-auto border-separate border border-gray-300 w-full" id="table_lengkap">
                        <thead class="bg-primary-form">
                            <tr class="tracking-wide">
                                <th class="p-3 border border-gray-300" style="font-family: Asap">ID</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NIK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NAMA</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. KK</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">JENIS KELAMIN</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">NO. TELP</th>
                                <th class="p-3 border border-gray-300" style="font-family: Asap">STATUS</th>
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
        if (!$.fn.DataTable.isDataTable('#table_lengkap')) {
            dataPengaduan = $('#table_lengkap').DataTable({
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
                    url: "{{ route('RW.warga_list') }}",
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
                    { data: 'jenis_kelamin', orderable: true, searchable: true, className: "text-center asap border-t-2" },
                    { data: 'no_telp', orderable: false, searchable: false, className: "text-center asap border-t-2" },
                    { data: 'status_kependudukan', orderable: false, searchable: false, className: "text-center asap border-t-2" },
                    { data: 'aksi', orderable: false, searchable: false, className: "text-center asap border-t-2" },
                ],
            });
        }
    });
</script>
@endpush
