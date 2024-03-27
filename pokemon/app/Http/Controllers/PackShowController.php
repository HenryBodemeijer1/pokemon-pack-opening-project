<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Api\PokemonUnlockedController;
use App\Models\PokemonUnlocked;
use App\Models\Pokemon;

class PackShowController extends Controller
{
    /**
     * @var PokemonUnlockedController
     */
    private PokemonUnlockedController $pokemonUnlockedController;

    /**
     * @param PokemonUnlockedController $pokemonUnlockedController
     */
    public function __construct(PokemonUnlockedController $pokemonUnlockedController)
    {
        $this->pokemonUnlockedController = $pokemonUnlockedController;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pokemon = Pokemon::all();

        $pokemons = $pokemon->random(3);

        foreach ($pokemons as $pokemon)
        {
            $this->pokemonUnlockedController->store($pokemon['id']);
        }

        return view('Pokemon/Packshow', compact('pokemons'));
    }
}
