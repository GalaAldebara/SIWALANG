<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $status_perkawinan
 * @property string $no_telp
 * @property string $no_kk
 * @property string $hubungan_kk
 * @property string $status_kependudukan
 * @property string $alamat_ktp
 * @property string $alamat_tinggal
 * @property string|null $kewarganegaraan
 * @property string|null $kota
 * @property string|null $kecamatan
 * @property string|null $kelurahan
 * @property int|null $RT
 * @property int|null $RW
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $rt_tinggal
 * @property int|null $rw_tinggal
 * @property string|null $kelurahan_tinggal
 * @property string|null $kecamatan_tinggal
 * @property string|null $kota_tinggal
 * @property string|null $foto_ktp
 * @property string|null $foto_kk
 * @property string|null $surat_nikah
 * @property string|null $foto_profil
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri query()
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereAlamatKtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereAlamatTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereFotoKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereFotoKtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereFotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereHubunganKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKecamatanTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKelurahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKelurahanTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKewarganegaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereKotaTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereNoKk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereNoTelp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereRT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereRW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereRtTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereRwTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereStatusKependudukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereStatusPerkawinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereSuratNikah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DataDiri whereUpdatedAt($value)
 */
	class DataDiri extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $kecamatan_id
 * @property string $nama_kecamatan
 * @property int $level_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Kelurahan> $kelurahan
 * @property-read int|null $kelurahan_count
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereKecamatanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereNamaKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereUpdatedAt($value)
 */
	class Kecamatan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $kelurahan_id
 * @property int $kecamatan_id
 * @property string $nama_kelurahan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kecamatan $kecamatan
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereKecamatanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereKelurahanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereNamaKelurahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereUpdatedAt($value)
 */
	class Kelurahan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $kota_id
 * @property string $nama_kota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kota query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kota whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kota whereKotaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kota whereNamaKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kota whereUpdatedAt($value)
 */
	class Kota extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $noTamu
 * @property string $nama_tuan_rumah
 * @property string $no_ktp_tamu
 * @property string $nama_tamu
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $tanggal_bertamu
 * @property string $keterangan_keperluan
 * @property string $nik
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereKeteranganKeperluan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereNamaTamu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereNamaTuanRumah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereNoKtpTamu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereNoTamu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereTanggalBertamu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PelaporanTamuModel whereUpdatedAt($value)
 */
	class PelaporanTamuModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $pengaduan_id
 * @property string $nik
 * @property string $nama
 * @property string $tanggal_pengaduan
 * @property string $keluhan
 * @property string $bukti
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\UserModel $user
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereBukti($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereKeluhan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel wherePengaduanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereTanggalPengaduan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PengaduanModel whereUpdatedAt($value)
 */
	class PengaduanModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $user_id
 * @property string $nik
 * @property string $username
 * @property string $nama
 * @property int $level_id
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PengaduanModel> $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUsername($value)
 */
	class UserModel extends \Eloquent {}
}

