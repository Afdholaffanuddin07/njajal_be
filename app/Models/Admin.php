<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
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

    
}
