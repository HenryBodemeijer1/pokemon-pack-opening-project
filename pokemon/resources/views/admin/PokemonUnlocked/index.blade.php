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
                        @foreach($unlocked as $pokemon)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h2 class="card-text">ID: {{$pokemon->id}}</h2>
                                    <p class="card-text">
                                        USER_ID: {{$pokemon->user_id}}
                                        <br>
                                        POKEMON_ID: {{$pokemon->pokemon_id}}
                                        <br>
                                    </p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <form action="{{ route('pokemonUnlocked.destroy', $pokemon->id)}}" method="post">
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
