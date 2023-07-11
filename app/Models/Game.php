<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory, HasUuids;

    public function getKeyType() {
        return 'string';
    }

    public function getIncrementing() {
        return false;
    }

    protected $fillable = [
        'thumbnail',
        'name',
        'detail_name',
        'developer',
        'short_description',
        'slug',
        'tutorial',
    ];
    
}
