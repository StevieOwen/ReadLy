<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Library extends Model
{
    /** @use HasFactory<\Database\Factories\LibraryFactory> */
    use HasFactory;
    protected $fillable = ['user','book'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function user(): BelongsTo
    {
         return $this->belongsTo(User::class,"user","user_id");
    }


}
