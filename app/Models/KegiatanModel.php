<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanModel extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['nama_kegiatan', 'tanggal_kegiatan', 'deskripsi_kegiatan', 'hari', 'jam_mulai', 'jam_selesai', 'lokasi', 'dokumentasi', 'status_kegiatan'];
}
