@extends('layouts\admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit an pokemon :)</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{asset('admin/pokemon/'. $pokemon->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" value="{{$pokemon->name}}" name="name" placeholder="name"><br>
                            </div>

                            <div class="form-group">
                                <label for="number">Number:</label>
                                <input type="text" class="form-control" id="number" value="{{$pokemon->number}}" name="number" placeholder="#999"><br>
                            </div>

                            <div class="form-group">
                                <label for="type">Type:</label>
                                <input type="text" class="form-control" id="type" value="{{$pokemon->type}}" name="type" placeholder="Grass|Water"><br>
                            </div>

                            <div class="form-group">
                                <label for="rarity">Rarity:</label>
                                <input type="text" class="form-control" id="rarity" value="{{$pokemon->rarity}}" name="rarity" placeholder="common"><br>
                            </div>

                            <div class="form-group">
                                <label class="custom-file-label" for="image">Upload Foto</label>
                                <input type="file" name="image" class="custom-file-input" id="image"><br>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Edit Pokemon</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
