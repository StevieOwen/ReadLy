<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


// #[Fillable(['user_id','firstName','lastName', 'email','genre', 'password','email_verified_at'])]
#[Hidden(['password', 'remember_token'])]

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'email',
        'password',
        'email_verified_at'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    
    public function getAuthIdentifierName() 
    { 
        return 'user_id'; 
    }

        public function getKeyForVerification()
    {
        return $this->user_id; 
    }
     
        public function getEmailForVerification()
    {
        return $this->email;
    }

    public function genres(): BelongsToMany 
    { 
        return $this->belongsToMany(Genre::class, 'genre_users', 'user', 'genre', 'user_id', 'id'); 
    } 

    public function uploadedBooks(): HasMany 
    { 
        return $this->hasMany(Book::class, 'user', 'user_id'); 
    }

    // public function books(): HasMany
    // {
    //     return $this->hasMany(Book::class);
    // }

   public function libraryBooks(): BelongsToMany
    {
        // Arguments: Target, Bridge Table, User Foreign Key, Book Foreign Key, Local Key, Remote Key
        return $this->belongsToMany(Book::class, 'libraries', 'user', 'book', 'user_id', 'id');
    }

}
