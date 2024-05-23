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
          <p style="font-family: Inter" class="px-4">Form Data Diri</p>
      </div>
      <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ route('store.form-satu') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full my-4 px-6" style="font-family: Asap">
            <div class="mb-3">
                <label for="nik">NIK</label>
                <div class="mt-2 w-full">
                    <input id="nik" name="nik" type="text" placeholder="{{ $user->nik }}" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <div class="mt-2 w-full">
                    <input id="nama" name="nama" type="text" placeholder="{{ $user->nama }}" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                </div>
            </div>
            <section class="flex flex-row justify-center gap-4">
              <div class="mb-3 w-full">
                <label for="tempat_lahir">Tempat Lahir <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="tempat_lahir" name="tempat_lahir" type="text" rows="3" placeholder="Masukkan tempat lahir" required class="w-full rounded-md border py-[5px] px-4 text-gray-900"></input>
                    @error('tempat_lahir')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
              </div>
              <div class="mb-3 w-full">
                <label for="tanggal_lahir">Tanggal Lahir <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="tanggal_lahir" name="tanggal_lahir" type="date" required class="w-full rounded-md border py-1 px-4 text-gray-900"></input>
                    @error('tanggal_lahir')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
              </div>
            </section>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="w-full rounded-md border py-1 px-4 text-gray-900">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
              <label for="status_perkawinan">Status Perkawinan <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="status_perkawinan" id="status_perkawinan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih status perkawinan</option>
                      <option value="Belum Nikah">Belum nikah</option>
                      <option value="Nikah">Sudah nikah</option>
                  </select>
              </div>
            </div>
            <div class="mb-3">
                <label for="no_telp">No. Telp <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="no_telp" name="no_telp" type="text" placeholder="Masukkan No-Telp" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('no_telp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="no_kk">No. KK <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="no_kk" name="no_kk" type="text" placeholder="Masukkan no_kk" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('no_kk')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
              <label for="hubungan_kk">Hubungan KK <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="hubungan_kk" id="hubungan_kk" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih hubungan KK</option>
                      <option value="kepala keluarga">kepala keluarga</option>
                      <option value="isteri">isteri</option>
                      <option value="anak">anak</option>
                  </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="status_kependudukan">Status Kependudukan <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="status_kependudukan" id="status_kependudukan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih status kependudukan</option>
                      <option value="Warga Asli">Warga Asli</option>
                      <option value="Kontrak">Kontrak</option>
                      <option value="Kost">Kost</option>
                      <option value="Pindahan">Pindah</option>
                  </select>
              </div>
            </div>
            <div class="mb-3">
                <label for="kewarganegaraan">Kewarganegaraan <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="kewarganegaraan" name="kewarganegaraan" type="text" placeholder="Masukkan kewarganegaraan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('kewarganegaraan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="pekerjaan">Pekerjaan <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                  <select name="pekerjaan" id="pekerjaan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    <option value="" disabled selected>Pilih Pekerjaan</option>
                    <option value="swasta">Swasta</option>
                    <option value="wiraswasta">wiraswasta</option>
                    <option value="wirausaha">wirausaha</option>
                    <option value="buruh">buruh</option>
                    <option value="tidak-bekerja">tidak bekerja</option>
                    <option value="pelajar">pelajar</option>
                    <option value="pelajar">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat_tinggal">Alamat Tinggal <span class="text-red-500 text-lg">*</span></label>
                <section class="grid grid-cols-6 gap-y-2 gap-x-3">
                  <div class="col-span-4">
                    <input id="alamat_tinggal" name="alamat_tinggal" type="text" placeholder="alamat" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat_tinggal')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <select name="rt" id="rt" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>RT</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                    </select>
                  </div>
                  <div class="">
                    <select name="rw" id="rw" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>RW</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                    </select>
                  </div>
                  <div class="col-span-2">
                    <input id="kelurahan" name="kelurahan" type="text" value="Lang-Lang" readonly class="w-full rounded-md border py-1 px-4 bg-gray-200" style="color: #9ca3af">
                    @error('kelurahan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="kecamatan" name="kecamatan" type="text" value="Singosari" readonly class="w-full rounded-md border py-1 px-4 bg-gray-200" style="color: #9ca3af">
                    @error('kecamatan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="kota" name="kota" type="text" value="Malang" readonly class="w-full rounded-md border py-1 px-4 bg-gray-200" style="color: #9ca3af">
                    @error('kota')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                </section>
            </div>
            <div class="mb-3 mt-5">
              <input type="checkbox" id="hide-alamat" class="mr-2">
              <label for="hide-alamat">Alamat KTP saya sama dengan alamat saat ini </label>
            </div>
            <div class="mb-3" id="alamat-tinggal-section">
                <label for="alamat_ktp">Alamat KTP <span class="text-red-500 text-lg">*</span></label>
                <section class="grid grid-cols-6 gap-y-2 gap-x-3">
                  <div class="col-span-4">
                    <input id="alamat_ktp" name="alamat_ktp" type="text" placeholder="alamat" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <input id="rt_ktp" name="rt_ktp" type="text" placeholder="RT" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('rt_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <input id="rw_ktp" name="rw_ktp" type="text" placeholder="RW" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('rw_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="kelurahan_ktp" name="kelurahan_ktp" type="text" placeholder="Kelurahan/Desa"  class="w-full rounded-md border py-1 px-4">
                    @error('kelurahan_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="kecamatan_ktp" name="kecamatan_ktp" type="text" placeholder="Kecamatan"  class="w-full rounded-md border py-1 px-4">
                    @error('kecamatan_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="kota_ktp" name="kota_ktp" type="text" placeholder="Kabupaten/Kota"  class="w-full rounded-md border py-1 px-4">
                    @error('kota_ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                </section>
            </div>
        </div>
        <div class="flex flex-row justify-center border-t w-full" style="font-family: Asap">
            <a class="border rounded-lg w-full m-3 py-3 text-center" href="{{ url('data_diri') }}">Batal</a>
            <button type="submit" class="border rounded-lg w-full m-3 py-3 bg-primary text-white">Selanjutnya</button>
        </div>
    </form>
  </div>
</main>
@endsection

@push('css')
<style>
  /* Tambahkan transisi CSS */
  #alamat-tinggal-section {
      max-height: 200px; /* Set maksimum tinggi untuk animasi */
      overflow: hidden; /* Sembunyikan konten yang melebihi maksimum tinggi */
      transition: max-height 0.4s ease-out; /* Terapkan transisi untuk animasi */
  }
</style>
@endpush

@push('js')
<script>
  // Ambil elemen checkbox dan elemen yang ingin disembunyikan
  const checkbox = document.getElementById('hide-alamat');
  const alamatTinggalSection = document.getElementById('alamat-tinggal-section');

  // Tambahkan event listener untuk checkbox
  checkbox.addEventListener('change', function() {
      // Jika checkbox dicentang, sembunyikan elemen input
      if (this.checked) {
          alamatTinggalSection.style.maxHeight = '0';
      } else {
          // Jika checkbox tidak dicentang, tampilkan kembali elemen input
          alamatTinggalSection.style.maxHeight = '200px'; /* Sesuaikan dengan maksimum tinggi */
      }
  });

  const alamat = document.getElementById('alamat_tinggal');
  const rt = document.getElementById('rt');
  const rw = document.getElementById('rw');
  const kelurahan = document.getElementById('kelurahan');
  const kecamatan = document.getElementById('kecamatan');
  const kota = document.getElementById('kota');

  const alamatKtp = document.getElementById('alamat_ktp');
  const rtKtp = document.getElementById('rt_ktp');
  const rwKtp = document.getElementById('rw_ktp');
  const kelurahanKtp = document.getElementById('kelurahan_ktp');
  const kecamatanKtp = document.getElementById('kecamatan_ktp');
  const kotaKtp = document.getElementById('kota_ktp');

  checkbox.addEventListener('change', function() {
      // Jika checkbox dicentang
      if (this.checked) {
        const alamatValue = [alamat.value," RT.",rt.value," RW.",rw.value," ",kelurahan.value," ",kecamatan.value," ",kota.value].filter(Boolean).join('');
          alamatKtp.value = alamatValue;
          rtKtp.disabled = true;
          rwKtp.disabled = true;
          kelurahanKtp.disabled = true;
          kecamatanKtp.disabled = true;
          kotaKtp.disabled = true;
          console.log(alamatValue);
      } else { // Jika checkbox tidak dicentang
          alamatKtp.value = "";
          rtKtp.disabled = false;
          rwKtp.disabled = false;
          kelurahanKtp.disabled = false;
          kecamatanKtp.disabled = false;
          kotaKtp.disabled = false;
      }
  });
</script>
@endpush
