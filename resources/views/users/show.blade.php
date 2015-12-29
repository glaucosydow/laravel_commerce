@extends('template')

@section('content')
    <h1>Show User: {{ $user->name }}</h1>
    <br>

    <p><b>Name:</b> {{$user->name}}</p>
    <p><b>Email:</b> {{$user->email}}</p>

    <br>
    <a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}" class='btn btn-primary '>Edit</a>
    <a href="{{ route('admin.users.destroy', ['id'=>$user->id]) }}" class='btn btn-danger '>Delete</a>
    <a href="{{ route('admin.users.index') }}" class='btn btn-default '>Back</a>


@endsection