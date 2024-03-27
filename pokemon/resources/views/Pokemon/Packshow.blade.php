@extends('layouts\pack')
@section('content')

<div class="container">
    @foreach($pokemons as $pokemon)
        <div class="pack-center">
            <ul class="pokemon_pack">
                <li class="pack-name">{{$pokemon->name}}</li>
                <li class="pack-list"><img class="img_pack_pokemon" src="{{asset('imgPokemon/' . $pokemon->imageURL)}}" alt="..."></li>
                <li class="pack-list">{{$pokemon->type}}</li>
                <li class="pack-list">{{$pokemon->number}}</li>
                <li class="pack-list">{{$pokemon->rarity}}</li>
            </ul>
        </div>
    @endforeach

</div>
    <div class ="side_center">
        <a class="butten-border" href="{{ route('packs') }}"><p >Back|</p></a>
        <a class="butten-border" href="{{ route('storage.index') }}"><p >Storage</p></a>
    </div>

@endsection
