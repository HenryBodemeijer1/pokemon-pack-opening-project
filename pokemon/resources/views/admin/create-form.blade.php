@extends('layouts\admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Create an pokemon :)</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{asset('admin/pokemon')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name"><br>
                            </div>

                            <div class="form-group">
                                <label for="number">Number:</label>
                                <input type="text" class="form-control" id="number" name="number" placeholder="#999"><br>
                            </div>

                            <div class="form-group">
                                <label for="type">Type:</label>
                                <input type="text" class="form-control" id="type" name="type" placeholder="Grass|Water"><br>
                            </div>

                            <div class="form-group">
                                <label for="rarity">Rarity:</label>
                                <input type="text" class="form-control" id="rarity" name="rarity" placeholder="common"><br>
                            </div>

                            <div class="form-group">
                                <label class="custom-file-label" for="image">Upload Foto</label>
                                <input type="file" name="image" class="custom-file-input" id="image"><br>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Create Pokemon</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
