<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use App\Models\PokemonUnlocked;

class PokemonUnlockedController
{
    public function index()
    {
        $pokemonUnlocked = PokemonUnlocked::all();
        return PokemonResource::collection($pokemonUnlocked);
    }

    public function show(): array
    {
        $pokemonUnlocked = PokemonUnlocked::all()->where('user_id', auth()->user()->id);
        $unlocked = array();
        foreach ($pokemonUnlocked as $pokemon)
        {
            $storagePokemon = Pokemon::all()->where('id', $pokemon['pokemon_id']);
            foreach ($storagePokemon as $storage)
                $unlocked[] = [
                    "unlocked_id" => $pokemon['id'],
                    "id" => $storage['id'],
                    "name" => $storage['name'],
                    "imageURL" => $storage['imageURL'],
                    "number" => $storage['number'],
                    "type" => $storage['type'],
                    "rarity" => $storage['rarity']
                ];
        }

        return $unlocked;
    }

    public function store($pokemons)
    {
;        $pokemonUnlocked = new PokemonUnlocked([
            "user_id" => auth()->user()->id,
            "pokemon_id" => $pokemons
        ]);

        $pokemonUnlocked->save();
    }

    public function destroy($id)
    {
        $pokemonUnlocked = PokemonUnlocked::find($id);
        $pokemonUnlocked->delete();
    }
}
