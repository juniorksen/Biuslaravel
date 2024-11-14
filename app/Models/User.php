<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;


    // Definir los atributos que pueden ser asignados masivamente (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'url_perfil',
        'url_fotos',
    ];

    // Si deseas ocultar ciertos atributos al serializar el modelo (por ejemplo, password)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Si deseas realizar un cast en ciertos atributos (por ejemplo, email_verified_at a datetime)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
