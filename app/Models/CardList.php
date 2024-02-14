<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CardList extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'board_id', 'name'];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
