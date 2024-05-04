<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengaduanModel extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['nik', 'tanggal_pengaduan', 'keterangan', 'foto'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'nik', 'nik');
    }
}
