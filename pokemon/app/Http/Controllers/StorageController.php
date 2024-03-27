<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\PokemonUnlockedController;

class StorageController extends Controller
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
        $unlocked = $this->pokemonUnlockedController->show();

        return view('Pokemon/Storage', compact('unlocked'));
    }

    public function destroy($id)
    {
        $this->pokemonUnlockedController->destroy($id);
        return redirect('storage');
    }
}
