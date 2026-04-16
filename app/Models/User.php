<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    // Beritahu Laravel bahwa Primary Key-nya -> 'npm'
    protected $primaryKey = 'npm';

    // Jika NPM bukan angka yang auto-increment (misal: string/manual input)
    public $incrementing = false;

    // Tipe data primary key-nya
    protected $keyType = 'string'; // atau 'int' sesuai migrasimu
}
