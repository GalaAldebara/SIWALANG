@extends('layouts.template')

@section('content')
<main class="w-full h-full">
  <div class="flex flex-col items-center py-10 min-w-fit">
      <div class="w-4/6 bg-primary p-3 text-white rounded-t-xl border-2 border-b-0 font-bold flex flex-row min-w-[490px]">
          <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data_diri') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>                                       
          </a>
          <p style="font-family: Inter" class="px-4">Form Ubah Password Akun</p>
      </div>              
      <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ url('pelaporan-tamu') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full my-4 px-6" style="font-family: Asap">
            <div class="mb-3">
                <label for="NIK">NIK <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="NIK" name="NIK" type="text" placeholder="34234252342" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                    @error('NIK')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="password">Password baru <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="password" name="password" type="password" placeholder="Masukkan password baru" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('password')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>    
            <div class="mb-3">
                <label for="verif-password">Verifikasi Password baru <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="verif-password" name="verif-password" type="password" placeholder="Masukkan password baru" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('verif-password')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="show-password" class="mr-2">
                <label for="show-password">Tampilkan Password</label>
            </div>
          </div>
        <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
            <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('data_diri') }}"">Batal</a>
            <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Ubah</button>
        </div>
    </form>
  </div>
</main>
@endsection

@push('css')
@endpush

@push('js')
  <script>
    document.getElementById('show-password').addEventListener('change', function() {
        var passwordField = document.getElementById('password');
        var verifPasswordField = document.getElementById('verif-password');
        if (this.checked) {
            passwordField.type = 'text';
            verifPasswordField.type = 'text';
        } else {
            passwordField.type = 'password';
            verifPasswordField.type = 'password';
        }
    });
  </script>
@endpush
