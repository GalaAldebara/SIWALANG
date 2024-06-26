@extends('layouts.template')

@section('content')
<main class="w-full h-full overflow-auto">
  <div class="flex flex-col items-center px-3 py-10 min-w-max">
      <div class="md:w-4/6 w-full bg-primary p-3 text-white rounded-t-xl border-2 border-b-0 font-bold flex flex-row">
          <a class="bg-white rounded-full size-7 flex justify-center items-center" href="{{ url('data_diri') }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
                </svg>
          </a>
          <p style="font-family: Inter" class="px-4">Form Ubah Password Akun</p>
      </div>
      <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ route('update.username.password') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full my-4 px-6" style="font-family: Asap">
            <div class="mb-3">
                <label for="username_lama">Username Lama</label>
                <div class="mt-2 w-full">
                    <input id="username_lama" name="username_lama" type="text" placeholder="{{ Auth::user()->username }}" readonly class="w-full rounded-md border py-1 px-4 bg-gray-200">
                    @error('oldPassword')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3" id="ubahUsernameForm" style="display: none;">
                <label for="new_username">Username Baru</label>
                <div class="mt-2 w-full">
                    <input id="new_username" name="new_username" type="text" placeholder="Masukkan Username Baru" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('new_username')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3" id="ubahPasswordForm" style="display: none;">
                <label for="newPassword">Password baru</label>
                <div class="mt-2 w-full">
                    <input id="newPassword" name="password" type="password" placeholder="Masukkan password baru" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('password')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3" id="ubahPasswordForm2" style="display: none;">
                <label for="repeatPassword">Verifikasi Password baru</label>
                <div class="mt-2 w-full">
                    <input id="repeatPassword" name="password_confirmation" type="password" placeholder="Masukkan password baru" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('repeatPassword')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3" id="ubahPasswordForm3">
                <input type="checkbox" id="show-password" class="mr-2" onchange="togglePasswordVisibility()">
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
<div id="chooseActionModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-primary px-4 py-3 sm:px-6 sm:flex sm:flex-row sm:justify-between">
                <h5 class="text-white text-lg font-bold">Pilih Aksi</h5>
                {{-- <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="p-6">
                <p>Apa yang Anda ingin lakukan:</p>
            </div>
            <div class="bg-gray-100 px-4 py-3 sm:px-6 flex justify-center flex-col gap-3 sm:flex-row">
                <button type="button" class="w-full flex justify-center rounded-md shadow-sm px-4 py-2 bg-primary text-base font-medium text-white sm:text-sm" onclick="ubahPassword()">Ubah Password</button>
                <button type="button" class="w-full flex justify-center rounded-md shadow-sm px-4 py-2 bg-primary text-base font-medium text-white sm:text-sm" onclick="ubahUsername()">Ubah Username</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('chooseActionModal');
        modal.classList.remove('hidden');
    });

    function ubahPassword() {
        document.getElementById('ubahPasswordForm').style.display = 'block';
        document.getElementById('ubahPasswordForm2').style.display = 'block';
        document.getElementById('ubahPasswordForm3').style.display = 'block';
        document.getElementById('ubahUsernameForm').style.display = 'none';
        closeModal();
    }

    function ubahUsername() {
        document.getElementById('ubahPasswordForm').style.display = 'none';
        document.getElementById('ubahPasswordForm2').style.display = 'none';
        document.getElementById('ubahPasswordForm3').style.display = 'none';
        document.getElementById('ubahUsernameForm').style.display = 'block';
        closeModal();
    }

    function closeModal() {
        var modal = document.getElementById('chooseActionModal');
        modal.classList.add('hidden');
    }

    function togglePasswordVisibility() {
      var password1 = document.getElementById("newPassword");
      var password2 = document.getElementById("repeatPassword");
      var checkbox = document.getElementById("show-password");

      if (checkbox.checked) {
        password1.type = "text";
        password2.type = "text";
      } else {
        password1.type = "password";
        password2.type = "password";
      }
    }
</script>
@endpush

