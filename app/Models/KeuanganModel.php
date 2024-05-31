<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeuanganModel extends Model
{
    use HasFactory;

    protected $table = 'keuangan';
    protected $primaryKey = 'keuangan_id';
    protected $fillable = ['nik', 'tanggal_kegiatan', 'kategori', 'keterangan', 'jumlah', 'total'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'nik', 'nik');
    }
}
