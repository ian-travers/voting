<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    const STATUS_OPEN = 'Open';
    const STATUS_CONSIDERING = 'Considering';
    const STATUS_IN_PROGRESS = 'In progress';
    const STATUS_IMPLEMENTED = 'Implemented';
    const STATUS_CLOSED = 'Closed';

    protected $guarded = [];

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }

    public function allClasses(): array
    {
        return [
            self::STATUS_OPEN => 'bg-gray-200',
            self::STATUS_CONSIDERING => 'bg-purple text-white',
            self::STATUS_IN_PROGRESS => 'bg-yellow text-white',
            self::STATUS_IMPLEMENTED => 'bg-green text-white',
            self::STATUS_CLOSED => 'bg-red text-white',
        ];
    }

    public function getClasses(): string
    {
        return $this->allClasses()[$this->name] ?? 'bg-gray-200';
    }
}
