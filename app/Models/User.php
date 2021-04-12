<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }

    public function getAvatar(): string
    {
        return 'https://www.gravatar.com/avatar/'
            . md5($this->email)
            . '?d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'
            . $this->getDefaultAvatarIndex()
            . '.png';
    }

    public function getDefaultAvatarIndex(): int
    {
        $firstCharacter = $this->email[0];


        return is_numeric($firstCharacter)
            ? ord($firstCharacter) - 21                 // 0..9 = 27 ..36
            : ord(strtolower($firstCharacter)) - 96;    // a..zA..Z = 1 ..26
    }
}
