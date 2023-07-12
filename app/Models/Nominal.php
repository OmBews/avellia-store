<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominal extends Model
{
    use HasFactory, HasUuids;

    public function getKeyType() {
        return 'string';
    }

    public function getIncrementing() {
        return false;
    }

    protected $fillable = [
        'games_id',
        'thumbnail',
        'name',
        'price',
    ];


    public function game()
    {
        return $this->belongsTo(Game::class, 'games_id', 'id');
    }
}
