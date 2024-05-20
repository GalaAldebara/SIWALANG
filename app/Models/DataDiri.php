<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;

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
        'kota_id',
        'kecamatan_id',
        'kelurahan_id'
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
