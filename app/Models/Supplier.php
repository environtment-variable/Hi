<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    protected $fillable = ['nama_supplier', 'alamat'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}