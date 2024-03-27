@extends('layouts\admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Hey, {{ Auth::user()->name}} Welcome to the admin page</h4>
                    </div>

                    <div class="card-body">
                        <h5>See here all the registered pokemon :)</h5>
                        <a href="{{route('pokemon.create')}}" class="btn btn-primary">Create an pokemon</a>
                        @foreach($pokemons as $pokemon)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('imgPokemon/' . $pokemon->imageURL)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-text">{{$pokemon->name}}</h2>
                                    <p class="card-text">
                                        {{$pokemon->number}}
                                        <br>
                                        {{$pokemon->type}}
                                        <br>
                                        {{$pokemon->rarity}}
                                    </p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="{{asset('admin/pokemon/' . $pokemon->id . '/edit')}}" class="btn">Update</a></li>
                                        <li class="list-group-item">
                                            <form action="{{ route('pokemon.destroy', $pokemon->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
