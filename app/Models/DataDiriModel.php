<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DataDiriModel extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'data_diri';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_perkawinan',
        'no_telp',
        'no_kk',
        'hubungan_kk',
        'status_kependudukan',
        'alamat_ktp',
        'alamat_tinggal',
        'kecamatan_id',
        'kelurahan_id',
        'kewarganegaraan',
        'kota',
        'kecamatan',
        'kelurahan',
        'RT',
        'RW',
        'rt_tinggal',
        'rw_tinggal',
        'kelurahan_tinggal',
        'kecamatan_tinggal',
        'kota_tinggal',
        'foto_ktp',
        'foto_kk',
        'surat_nikah',
        'foto_profil',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
}
