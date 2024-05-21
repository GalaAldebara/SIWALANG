<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    protected $hidden = ['password'];

    public function user(): HasMany
    {
        return $this->hasMany(PengaduanModel::class);
    }
}
