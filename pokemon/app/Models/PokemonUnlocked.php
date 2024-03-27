<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonUnlocked extends Model
{
    use HasFactory;

    protected $table = 'pokemon_unlocked';

    protected $fillable = [
        'pokemon_id',
        'user_id',
    ];
    public function pokemon()
    {
        $this->hasOne(Pokemon::class, 'pokemon_id','id');
    }
    public function user()
    {
        $this->hasOne(User::class, 'user_id','id');
    }
}
