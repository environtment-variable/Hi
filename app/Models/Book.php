<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id',
        'category_id'
    ];

    // Relasi ke Rak Buku
    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id');
    }

    // Relasi ke Kategori (INI YANG TADI HILANG)
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
