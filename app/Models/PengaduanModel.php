<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengaduanModel extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $primaryKey = 'pengaduan_id';
    protected $fillable = ['nik', 'nama', 'tanggal_pengaduan', 'keluhan', 'bukti'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'nik', 'nik');
    }
}
