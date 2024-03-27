@extends('layouts.app')

@section('content')
    <div class="home">
        <h1>Een Pack Opener Website</h1>
        <div class="home-list">
            <ul>
                <li><a class="home-link" href="http://127.0.0.1:8000/Pokemon/Pokedex"><img class="pack-foto"src="http://127.0.0.1:8000/img\Pokedex.png" alt="pokedex"></a><h2 class="item-name">Pokedex</h2></li>
                <li><a class="home-link" href="http://127.0.0.1:8000/Pokemon/Packs"><img class="pack-foto" src="http://127.0.0.1:8000/img\pack.png" alt="pack"></a><h2 class="item-name">Een Pack</h2></li>
                <li><a class="home-link" href="{{ route('storage.index') }}"><img class="pack-foto" src="http://127.0.0.1:8000/img\storage.png" alt="storage"></a><h2 class="item-name">Storage</h2></li>
            </ul>
        </div>
    </div>
@endsection
