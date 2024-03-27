<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\PokemonController;
use App\Models\Pokemon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class AdminPokemonController
{
    /**
     * @var PokemonController
     */
    private PokemonController $pokemonController;

    /**
     * @param PokemonController $pokemonController
     */
    public function __construct(PokemonController $pokemonController)
    {
        $this->pokemonController = $pokemonController;
    }

    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        $pokemons = $this->pokemonController->index();
        return View('admin/pokemon', ['pokemons' => $pokemons]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        return View('admin/show', compact('pokemon'));
    }

    public function create()
    {
        return View('admin/create-form');
    }

    /**
     * @param Request $request
     * @return Redirector|RedirectResponse|Application
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        $pokemon = $this->pokemonController->store($request);
        $pokemon->save();
        return redirect('admin/pokemon');
    }

    public function edit(int $id)
    {
        $pokemon = Pokemon::find($id);
        return view('admin/edit', compact('pokemon'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Redirector|Application|RedirectResponse
     */
    public function update(Request $request, int $id): Redirector|Application|RedirectResponse
    {
        $pokemon = $this->pokemonController->update($request, $id);
        $pokemon->save();
        return redirect('admin/pokemon');
    }

    public function destroy(int $id)
    {
        $this->pokemonController->destroy($id);
        return redirect('admin/pokemon');
    }
}
