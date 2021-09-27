@extends('layouts.master')

@section('cont')


    <h1>add new quiz</h1>
    <form action="quizzes" method="post">
        @csrf
<div class="form-group col-md-3">
  <label for="">name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
</div>
<div class="form-group col-md-3">
    <label for="">marks</label>
    <input type="text" name="marks" id="" class="form-control" placeholder="marks" aria-describedby="helpId">
  </div>
  <select  name="student_id" >
    <option value="">Select student</option>
    @forelse ( \App\Models\Student::all() as $student)
        <option value="{{$student->id}}">{{$student->name}}</option>
    @empty
        <option value="">Empty</option>
    @endforelse
</select>

  <div class="form-group col-md-3">
    <input type="submit" value="save" id="" class="submit-control" >
  </div>
</form>


    <table class="table table-striped table-hover">
        <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>marks</th>
                <th>students name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @forelse ($quizzes as $quiz)
                <tr>
                    <td>{{$quiz->id}}</td>
                    <td>{{$quiz->name}}</td>
                    <td>{{$quiz->marks}}</td>
                    <td>
                       {{$quiz->student->name}}
                    </td>
                    <td><a  class="btn btn-danger" href="quizzes/{{$quiz->id}}/delete" role="button">delete</a></td>
                 <td><a  class="btn btn-success" href="quizzes/{{$quiz->id}}/edit" role="button">edit</a></td>
                </tr>
                @empty
                  <td colspan="5">no quizzes</td>
                @endforelse

            </tbody>
    </table>

    @endsection
