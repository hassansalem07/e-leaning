@extends('layouts.master')

@section('cont')



    <h1>edit {{$quizzes->name}}</h1>
    <form action="/quizzes/{{$quizzes->id}}" method="post">
        @csrf
        <div class="form-group col-md-3">
            <label for="">name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
          </div>
          <div class="form-group col-md-3">
              <label for="">marks</label>
              <input type="text" name="marks" id="" class="form-control" placeholder="marks" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-3">
              <label for="">student</label>
              <input type="text" name="student_id" id="" class="form-control" placeholder="student" aria-describedby="helpId">
            </div>
  <div class="form-group col-md-3">
    <input type="submit" value="update" id="" class="submit-control" >
  </div>
</form>




@endsection
