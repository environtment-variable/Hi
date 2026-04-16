<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'npm';  // Custom PK
    public $incrementing = false;  // Karena NPM biasanya input manual
    protected $keyType = 'string';

    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    // Relasi: Satu user bisa punya banyak pinjaman
    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}
