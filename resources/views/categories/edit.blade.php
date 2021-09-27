@extends('layouts.master')

@section('cont')



    <h1>edit {{$categories->name}}</h1>
    <form action="/categories/{{$categories->id}}" method="post">
        @csrf
<div class="form-group col-md-3">
  <label for="">name</label>
  <input type="text" value="{{$categories->name}}" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
</div>

  <div class="form-group col-md-3">
    <input type="submit" value="update" id="" class="submit-control" >
  </div>
</form>




@endsection
