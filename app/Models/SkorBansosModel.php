<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorBansosModel extends Model
{
    use HasFactory;

    protected $table = 'skor_bansos';
    protected $primaryKey = 'id_skor';

    protected $fillable = [
        'id_bansos',
        'skor',
    ];

    public function bansos()
    {
        return $this->belongsTo(User::class, 'id_bansos', 'id_bansos');
    }
}
