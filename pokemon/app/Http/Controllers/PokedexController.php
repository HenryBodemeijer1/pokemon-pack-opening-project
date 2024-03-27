<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\PokemonUnlockedController;
use App\Models\Pokemon;

class PokedexController extends Controller
{

    private PokemonUnlockedController $pokemonUnlockedController;

    public function __construct(PokemonUnlockedController $pokemonUnlockedController)
    {
        $this->pokemonUnlockedController = $pokemonUnlockedController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pokemon = Pokemon::all();

        $unlocked = $this->pokemonUnlockedController->show();

        return view('Pokemon/Pokedex', compact('pokemon', 'unlocked'));
    }
}
