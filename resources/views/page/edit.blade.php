@extends('layout/application')
@section('content')
<a href="/contact" class="btn btn-secondary"><< Kembali</a>
<form method="post" action={{'/contact/'.$data->id}}>
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1> Account: {{ $data->id }}</h1>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="telephone" id="phone" value="{{$data->telephone}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}">
    </div>
    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="text" class="form-control" name="instagram" id="instagram" value="{{$data->instagram}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </div>
</form>
@endsection