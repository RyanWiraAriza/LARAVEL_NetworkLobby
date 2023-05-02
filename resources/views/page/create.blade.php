@extends('layout/application')
@section('content')
<form method="post" action="/contact">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="{{Session::get('name')}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="telephone" id="phone" value="{{Session::get('telephone')}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{Session::get('email')}}">
    </div>
    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="text" class="form-control" name="instagram" id="instagram" value="{{Session::get('instagram')}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>
@endsection