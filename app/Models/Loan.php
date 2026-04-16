<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    protected $fillable = ['user_npm', 'loan_at', 'return_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }

    public function details(): HasMany
    {
        return $this->hasMany(LoanDetail::class);
    }
}
