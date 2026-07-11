<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class GenreUser extends Model
{
    /** @use HasFactory<\Database\Factories\GenreUserFactory> */
    use HasFactory;
     protected $fillable = [
        'user',
        'genre'
    ];

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,"user","user_id");
    }
}
