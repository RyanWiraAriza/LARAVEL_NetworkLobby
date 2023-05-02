@extends('layout/application')
@section('content')
    <div>
        <a href='/contact' class="btn btn-secondary"><< Back</a>
        <h1>Contact Page</h1>
        <p>
            <ul>
                <li><b>Account: </b>{{$data->id}}</li>
                <li><b>Name: </b>{{$data->name}}</li>
                <li><b>Phone: </b>{{$data->telephone}}</li>
                <li><b>Email: </b>{{$data->email}}</li>
                <li><b>Instagram: </b>{{$data->instagram}}</li>
            </ul>   
        </p>
    </div>
@endsection
        