@extends('layouts\pokedex')
@section('content')
<div class="container">
    @foreach($pokemon as $pokemon)
        {{$put = false}}        
        {{$image = false}}        
        <div class="pack-center">
            <ul class="pokemon_pack">
                <li class="pack-name">{{$pokemon['name']}}</li>
                @foreach ($unlocked as $unlockedd)
                        @if($unlockedd['id'] == $pokemon['id'] && $put == false)
                            @php($image = true)
                            @php($put = true)
                            <li class="pack-list"><img class="img_pack_pokemon" src="{{asset('imgPokemon/' . $pokemon['imageURL'])}}" class="card-img-top" alt="..."></li>
                        @endif
                @endforeach
                @if($image == false)
                    <li class="pack-list"><img class="pack_locked" src="{{asset('imgPokemon/' . $pokemon['imageURL'])}}" class="card-img-top" alt="..."></li>
                    @endif
                <li class="pack-list">{{$pokemon['type']}}</li>
                <li class="pack-list">{{$pokemon['number']}}</li>
                <li class="pack-list">{{$pokemon['rarity']}}</li>
            </ul>
        </div>
    @endforeach
</div>
@endsection
