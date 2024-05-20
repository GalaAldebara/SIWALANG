<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Diri</title>
</head>
<body>
    <h1>Input Data Diri</h1>
    <form action="{{ route('store_data_diri') }}" method="POST">
        @csrf

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="status_perkawinan">Status Perkawinan:</label><br>
        <select id="status_perkawinan" name="status_perkawinan">
            <option value="" disabled selected>Pilih Status Perkawinan</option>
            <option value="Nikah">Nikah</option>
            <option value="Belum Nikah">Belum Nikah</option>
        </select><br>

        <label for="no_telp">No. Telp:</label><br>
        <input type="text" id="no_telp" name="no_telp"><br>

        <label for="no_kk">No. KK:</label><br>
        <input type="text" id="no_kk" name="no_kk"><br>

        <label for="hubungan_kk">Hubungan KK:</label><br>
        <input type="text" id="hubungan_kk" name="hubungan_kk"><br>

        <label for="status_kependudukan">Status Kependudukan:</label><br>
        <select id="status_kependudukan" name="status_kependudukan">
            <option value="" disabled selected>Pilih Status Kependudukan</option>
            <option value="Warga Asli">Warga Asli</option>
            <option value="Pindah">Pindahan</option>
            <option value="Kontrak">Kontrak Rumah</option>
            <option value="Kost">Kost</option>
        </select><br>

        <label for="alamat_ktp">Alamat KTP:</label><br>
        <input type="text" id="alamat_ktp" name="alamat_ktp"><br>

        <label for="alamat_tinggal">Alamat Tinggal:</label><br>
        <input type="text" id="alamat_tinggal" name="alamat_tinggal"><br>

        <label for="kota_id">Kota:</label><br>
        <select id="kota_id" name="kota_id">
            <option value="" disabled selected>Pilih Kota</option>
            @foreach($kota as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kota }}</option>
            @endforeach
        </select><br>

        <label for="kecamatan_id">Kecamatan:</label><br>
        <select id="kecamatan_id" name="kecamatan_id">
            <option value="" disabled selected>Pilih Kecamatan</option>
            @foreach($kecamatan as $k)
                <option value="{{ $k->kecamatan_id }}">{{ $k->nama_kecamatan }}</option>
            @endforeach
        </select><br>

        <label for="kelurahan_id">Kelurahan:</label><br>
        <select id="kelurahan_id" name="kelurahan_id">
            <option value="" disabled selected>Pilih Kelurahan</option>
        </select><br>

        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik" value="{{ Auth::user()->nik }}" readonly><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ Auth::user()->nama }}" readonly><br>


        <input type="submit" value="Submit">
    </form>
    <script>
        $('#kecamatan_id').on('change', function() {
            var kecamatan_id = $(this).val();
            console.log('Selected kecamatan_id: ', kecamatan_id);

            if (kecamatan_id) {
                $.ajax({
                    url: '{{ route("getKelurahan") }}',
                    type: 'GET',
                    data: { kecamatan_id: kecamatan_id },
                    success: function(data) {
                        console.log('Kelurahan data received: ', data);

                        $('#kelurahan_id').empty();
                        $('#kelurahan_id').append('<option value="" disabled selected>Pilih Kelurahan</option>');
                        $.each(data, function(key, value) {
                            $('#kelurahan_id').append('<option value="' + value.kelurahan_id + '">' + value.nama_kelurahan + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ', status, error);
                    }
                });
            } else {
                $('#kelurahan_id').empty();
                $('#kelurahan_id').append('<option value="" disabled selected>Pilih Kelurahan</option>');
            }
        });
    </script>
</body>
</html>
