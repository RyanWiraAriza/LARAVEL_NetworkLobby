@extends('layout/application')
@section('content')
        <h1>Networking Lobby</h1>
        <a href="/contact/create" class="btn btn-primary">+Add contact data</a>
        <table class="table">
                <thread>
                        <th>Account</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Instagram</th>
                        <th>Actions</th>
                </thread>
                <tbody>
                        @foreach($data as $item)
                                <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->telephone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->instagram}}</td>
                                        <td><a class = "btn btn-secondary btn-sm" href='{{ url('/contact/'.$item->id)}}'>Detail</a>
                                        <a class = "btn btn-warning btn-sm" href='{{ url('/contact/'.$item->id.'/edit')}}'>Edit</a>
                                        <form onsubmit="return confirm('Are you sure?')" class = 'd-inline' action="{{'/contact/'.$item->id}}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                                        </form></td>
                                </tr>
                        @endforeach
                </tbody>
        </table>
        {{$data -> links()}}
@endsection