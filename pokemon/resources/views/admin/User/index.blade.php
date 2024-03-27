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
                        <h5>See here all the registered users :)</h5>
                        @foreach($user as $user)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h2 class="card-text">ID: {{$user->id}}</h2>
                                    <p class="card-text">
                                        USER_ID: {{$user->id}}
                                        <br>
                                        USER_NAME: {{$user->name}}
                                        <br>
                                        USER_EMAIL: {{$user->email}}
                                        <br>
                                        USER_USERNAME: {{$user->username}}
                                        <br>
                                        USER_PASSWORD: {{$user->password}}
                                        <br>
                                        USER_IS_ADMIN: {{$user->is_admin}}
                                        <br>
                                    </p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="{{asset('admin/user/' . $user->id . '/edit')}}" class="btn">Update</a></li>
                                        <li class="list-group-item">
                                            <form action="{{ route('user.destroy', $user->id)}}" method="post">
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
