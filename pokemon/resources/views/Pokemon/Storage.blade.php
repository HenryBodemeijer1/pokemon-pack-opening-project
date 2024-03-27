@extends('layouts\storage')

@section('content')
    <div class="container">
        @foreach($unlocked as $pokemon)
            <div class="pack-center">
                <ul class="pokemon_pack">
                    <li class="pack-name">{{$pokemon['name']}}</li>
                    <li class="pack-list"><img class="img_pack_pokemon"
                                               src="{{asset('imgPokemon/' . $pokemon['imageURL'])}}" class="card-img-top"
                                               alt="..."></li>
                    <li class="pack-list">{{$pokemon['type']}}</li>
                    <li class="pack-list">{{$pokemon['number']}}</li>
                    <li class="pack-list">{{$pokemon['rarity']}}</li>
                    <form action="{{ route('storage.destroy', $pokemon['unlocked_id'])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
