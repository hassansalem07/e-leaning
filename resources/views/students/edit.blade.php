@extends('layouts.master')

@section('cont')


    <h1>edit {{$students->name}}</h1>
    <form action="/students/{{$students->id}}" method="post">
        @csrf
<div class="form-group col-md-3">
  <label for="">name</label>
  <input type="text" value="{{$students->name}}" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
</div>
<div class="form-group col-md-3">
    <label for="">age</label>
    <input type="text" value="{{$students->age}}" name="age" id="" class="form-control" placeholder="age" aria-describedby="helpId">
  </div>
  <div class="form-group col-md-3">
    <label for="">mobile</label>
    <input type="text" value="{{$students->mobile}}" name="mobile" id="" class="form-control" placeholder="mobile" aria-describedby="helpId">
  </div>
  <div class="form-group col-md-3">
    <label for="">section</label>
    <input type="text" value="{{$students->section}}" name="section" id="" class="form-control" placeholder="section" aria-describedby="helpId">
  </div>




  <div class="form-group col-md-3">
    <input type="submit" value="update" id="" class="submit-control" >
  </div>
</form>




@endsection
