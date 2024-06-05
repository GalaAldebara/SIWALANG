<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifModel extends Model
{
    use HasFactory;

    protected $table = 'notif';
    protected $primaryKey = 'id_notif';

    protected $fillable = [
        'user_id',
        'tanggal_notif',
        'keterangan',
        'status_lihat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
