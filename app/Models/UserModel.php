<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'status', 'nik'];
    protected $hidden = ['password'];

    public function user(): HasMany
    {
        return $this->hasMany(PengaduanModel::class);
    }

    public function dataDiri()
    {
        return $this->hasOne(DataDiriModel::class, 'nik', 'nik');
    }
}
