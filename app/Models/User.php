<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Beritahu Laravel bahwa Primary Key-nya adalah 'npm'
    protected $primaryKey = 'npm';

    // Jika NPM bukan angka yang auto-increment (misal: string/manual input)
    public $incrementing = false;

    // Tipe data primary key-nya
    protected $keyType = 'string'; // atau 'int' sesuai migrasimu
}
