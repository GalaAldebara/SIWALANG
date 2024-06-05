<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BansosModel extends Model
{
    use HasFactory;

    protected $table = 'bansos';
    protected $primaryKey = 'id_bansos';

    protected $fillable = [
        'nik',
        'no_kk',
        'jumlah_keluarga',
        'jumlah_tanggungan',
        'status_rumah',
        'luas_rumah',
        'alas_rumah',
        'dinding_rumah',
        'fasilitas_wc',
        'besaran_listrik',
        'jumlah_kendaraan',
        'pendapatan',
        'pekerjaan',
        'foto_gaji',
        'foto_sktm',
        'status_pengajuan',
        'tanggal_pengajuan',
        'id_notif',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
}
