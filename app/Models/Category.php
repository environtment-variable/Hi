<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category'];

    // Nonaktifkan timestamps jika di migrasi tidak ada created_at/updated_at
    public $timestamps = false;
    
    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}