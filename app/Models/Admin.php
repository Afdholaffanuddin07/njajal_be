<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;


class Admin extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'admin',
        'passadmin',
    ];

    protected $hidden = [
        'passadmin',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    
    public function getJWTIdentifier()
    {
    return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
    return [];
    }
}
