<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\PokemonUnlockedController;
use Illuminate\View\View;

class AdminPokemonUnlockedController
{
    private PokemonUnlockedController $pokemonUnlockedController;

    public function __construct(PokemonUnlockedController $pokemonUnlockedController)
    {
        $this->pokemonUnlockedController = $pokemonUnlockedController;
    }

    public function index()
    {
        $unlocked = $this->pokemonUnlockedController->index();
        return View('Admin/PokemonUnlocked/index', compact('unlocked'));
    }

    public function destroy(int $id)
    {
         $this->pokemonUnlockedController->destroy($id);
        return redirect('admin/pokemonUnlocked');
    }
}
