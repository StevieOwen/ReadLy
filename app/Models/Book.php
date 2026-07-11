<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    protected $fillable = [
        'title', 'author', 'file_path', 'visibility', 'status', 'last_page', 'user', 'format'
    ];

     public function user(): BelongsTo
    {
         return $this->belongsTo(User::class,"user","user_id");
    }

    public function library(): BelongsTo
    {
        return $this->belongsTo(Library::class);
    }

   public function genres(): BelongsToMany 
    { 
        return $this->belongsToMany(Genre::class, 'genre_books', 'book', 'genre'); 
    } 
    

}
