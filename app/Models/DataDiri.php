<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;

    protected $table = 'data_diri';

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
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
}
