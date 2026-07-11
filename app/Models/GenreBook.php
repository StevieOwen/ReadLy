<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GenreBook extends Model
{
    /** @use HasFactory<\Database\Factories\GenreBookFactory> */
    use HasFactory;
    protected $fillable = [
        'book',
        'genre'
    ];

     public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class,"book","id");
    }
}
