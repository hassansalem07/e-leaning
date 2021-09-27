@extends('layouts.master')

@section('cont')


    <h1>edit {{$skills->name}}</h1>
    <form action="/skills/{{$skills->id}}" method="post">
        @csrf
<div class="form-group col-md-3">
  <label for="">name</label>
  <input type="text" value="{{$skills->name}}" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
</div>

  <div class="form-group col-md-3">
    <input type="submit" value="update" id="" class="submit-control" >
  </div>
</form>



@endsection
