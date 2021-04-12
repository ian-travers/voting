<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }

    public function allClasses(): array
    {
        return [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple text-white',
            'In progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-green text-white',
            'Closed' => 'bg-red text-white',
        ];
    }

    public function getClasses(): string
    {
        return $this->allClasses()[$this->name];
    }
}
