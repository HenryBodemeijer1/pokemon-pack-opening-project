<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $pokemons = Pokemon::all();
        return  PokemonResource::collection($pokemons);
    }

    /**
     * @param Request $request
     * @return Pokemon
     */
    public function store(Request $request): Pokemon
    {
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageURL = $image->getClientOriginalName();
            $request->image->move(public_path('imgPokemon'), $imageURL);
        }

        return new Pokemon([
            'name' => $request->name,
            'imageURL' => $imageURL,
            'number' => $request->number,
            'type' => $request->type,
            'rarity' => $request->rarity,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Pokemon
     */
    public function update(Request $request, int $id): Pokemon
    {
        $pokemon = Pokemon::find($id);
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageURL = $image->getClientOriginalName();
            $request->image->move(public_path('imgPokemon'), $imageURL);

            $pokemon->imageURL = $imageURL;
        }
            $pokemon->name = $request->name;
            $pokemon->number = $request->number;
            $pokemon->type = $request->type;
            $pokemon->rarity = $request->rarity;

        return $pokemon;
    }

    public function destroy(int $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();
    }
}
