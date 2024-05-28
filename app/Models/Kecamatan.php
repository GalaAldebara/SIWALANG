<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    protected $fillable = ['level_id', 'nama_kelurahan'];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class, 'kecamatan_id');
    }
}
