@extends('layouts.template')

@section('content')
@php
    use Carbon\Carbon;    
@endphp
<main class="w-full flex justify-center">
    <div class="w-5/6 grid grid-cols-[1fr_100px] py-12" style="font-family: Asap">
        @foreach ($notif as $n)
            <div class="flex flex-col py-3 border-b-2">
                <span class="font-bold text-xl flex">
                    <div class="flex justify-center items-center">
                        {!! $n->status_lihat == 'belum' ? '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="size-4 mr-2">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                        </svg>' : '' !!}
                        
                    </div>
                    {{ $n->nama_nik }} {{ $n->keterangan }}
                </span>
                <span class="text-gray-400">{{ Carbon::parse($n->tanggal_notif)->translatedFormat('l, d F Y') }}</span>
            </div>
            <div class="flex justify-center border-b-2">
                <button class="bg-gray-400 my-4 px-4 rounded-2xl font-medium" onclick="updateStatusAndRedirect({{ $n->id_notif }}, {{ $n->id_bansos }})">Lihat</button>
            </div> 
        @endforeach
    </div>
</main>
@if(session('status'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Status Perubahan',
            text: "{{ session('status') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif
@endsection

@push('css')
@endpush

@push('js')
<script>
    function updateStatusAndRedirect(id_notif, id_bansos) {
        // Lakukan permintaan AJAX untuk memperbarui status
        fetch(`rt_notifikasi/update-status/${id_notif}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Sertakan token CSRF
            },
            body: JSON.stringify({ status_lihat: 'sudah' })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Arahkan ke URL yang ditentukan
                window.location.href = `rt_notifikasi/bansos/${id_bansos}`;
            } else {
                console.error('Gagal memperbarui status');
            }
        })
    }
</script>
@endpush


