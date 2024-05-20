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
      <form class="w-4/6 flex flex-col items-start border-r border-l border-b min-w-[490px] rounded-b-xl"  action="{{ url('data_diri/form_dua') }}" method="POST" enctype="multipart/form-data">
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
                <label for="nama">Nama <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="nama" name="nama" type="text" placeholder="Sudiono" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                    @error('nama')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
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
              <label for="status-perkawinan">Status Perkawinan <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="status-perkawinan" id="status-perkawinan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih status perkawinan</option>
                      <option value="Laki-laki">Belum nikah</option>
                      <option value="Perempuan">Sudah nikah</option>
                  </select>
              </div>
            </div>
            <div class="mb-3">
                <label for="no-telp">No. Telp <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="no-telp" name="no-telp" type="text" placeholder="Masukkan no-telp" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('no-telp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="no-kk">No. KK <span class="text-red-500 text-lg">*</span></label>
                <div class="mt-2 w-full">
                    <input id="no-kk" name="no-kk" type="text" placeholder="Masukkan no-kk" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('no-kk')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
              <label for="hubungan-kk">Hubungan KK <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="hubungan-kk" id="hubungan-kk" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih hubungan KK</option>
                      <option value="kepala-keluarga">kepala-keluarga</option>
                      <option value="isteri">isteri</option>
                      <option value="anak">anak</option>
                      <option value="orang tua">orang tua</option>
                  </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="status-kependudukan">Status Kependudukan <span class="text-red-500 text-lg">*</span></label>
              <div class="mt-2 w-full">
                  <select name="status-kependudukan" id="status-kependudukan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>Pilih status kependudukan</option>
                      <option value="Laki-laki">Warga lokal</option>
                      <option value="Perempuan">warga bukan lokal</option>
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
                  <select name="status-kependudukan" id="status-kependudukan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    <option value="" disabled selected>Pilih Pekerjaan</option>
                    <option value="swasta">Swasta</option>
                    <option value="wiraswasta">wiraswasta</option>
                    <option value="wirausaha">wirausaha</option>
                    <option value="buruh">buruh</option>
                    <option value="tidak-bekerja">tidak bekerja</option>
                    <option value="pelajar">pelajar</option>
                </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat-ktp">Alamat KTP <span class="text-red-500 text-lg">*</span></label>
                <section class="grid grid-cols-6 gap-y-2 gap-x-3">
                  <div class="col-span-4">
                    <input id="alamat-ktp" name="alamat-ktp" type="text" placeholder="alamat" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <input id="alamat-ktp-rt" name="alamat-ktp-rt" type="text" placeholder="RT" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp-rt')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <input id="alamat-ktp-rw" name="alamat-ktp-rw" type="text" placeholder="RW" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp-rw')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-ktp-kelurahan" name="alamat-ktp-kelurahan" type="text" placeholder="Kelurahan/Desa" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp-kelurahan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-ktp-kecamatan" name="alamat-ktp-kecamatan" type="text" placeholder="Kecamatan" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp-kecamatan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-ktp-kabupaten" name="alamat-ktp-kabupaten" type="text" placeholder="Kabupaten/Kota" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-ktp-kabupaten')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                </section>
            </div>
            <div class="mb-3 mt-5">
              <input type="checkbox" id="hide-alamat" class="mr-2">
              <label for="hide-alamat">Alamat saya saat ini sama dengan alamat KTP</label>
            </div>
            <div class="mb-3" id="alamat-tinggal-section">
                <label for="alamat-tinggal">Alamat Tinggal <span class="text-red-500 text-lg">*</span></label>
                <section class="grid grid-cols-6 gap-y-2 gap-x-3">
                  <div class="col-span-4">
                    <input id="alamat-tinggal" name="alamat-tinggal" type="text" placeholder="alamat" class="w-full rounded-md border py-1 px-4 text-gray-900">
                    @error('alamat-tinggal')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="">
                    <select name="alamat-tinggal_rt" id="alamat-tinggal-rt" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>RT</option>
                      <option value="001">001</option>
                      <option value="002">002</option>
                      <option value="003">003</option>
                      <option value="004">004</option>
                    </select>
                  </div>
                  <div class="">
                    <select name="alamat-tinggal_rw" id="alamat-tinggal-rw" class="w-full rounded-md border py-1 px-4 text-gray-900">
                      <option value="" disabled selected>RW</option>
                      <option value="001">001</option>
                      <option value="002">002</option>
                      <option value="003">003</option>
                      <option value="004">004</option>
                    </select>
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-tinggal-kelurahan" name="alamat-tinggal-kelurahan" type="text" placeholder="Kelurahan/Desa" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                    @error('alamat_tinggal_kelurahan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-tinggal-kecamatan" name="alamat-tinggal-kecamatan" type="text" placeholder="Kecamatan" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                    @error('alamat_tinggal_kecamatan')
                    <small class="text-red-500 text-xm ml-4">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-span-2">
                    <input id="alamat-tinggal-kabupaten" name="alamat-tinggal-kabupaten" type="text" placeholder="Kabupaten/Kota" readonly class="w-full rounded-md border py-1 px-4 text-gray-900 bg-gray-200">
                    @error('alamat_tinggal_kabupaten')
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
  #alamat-tinggal-section {
    transition: max-height 0.5s ease-out, opacity 0.5s ease-out;
    max-height: 1000px; /* Angka besar untuk memastikan cukup tinggi */
    opacity: 1;
    overflow: hidden;
  }
  
  #alamat-tinggal-section.hide {
    max-height: 0;
    opacity: 0;
  }
</style>
@endpush

@push('js')
<script>
  document.getElementById('hide-alamat').addEventListener('change', function() {
    var alamatTinggalSection = document.getElementById('alamat-tinggal-section');
    if (this.checked) {
      alamatTinggalSection.classList.add('hide');
    } else {
      alamatTinggalSection.classList.remove('hide');
    }
  });
</script>
@endpush
