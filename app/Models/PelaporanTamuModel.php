<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelaporanTamuModel extends Model
{
    use HasFactory;

    protected $table = 'pelaporan_tamu';

    protected $primaryKey = 'noTamu';

    protected $fillable = [
        'nama_tuan_rumah',
        'no_ktp_tamu',
        'nama_tamu',
        'jenis_kelamin',
        'alamat',
        'tanggal_bertamu',
        'keterangan_keperluan',
        'nik',
    ];
}
