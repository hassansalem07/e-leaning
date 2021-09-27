@extends('layouts.master')


@section('cont')


<h1>add new student</h1>
<form action="students" method="post">
    @csrf
<div class="form-group col-md-3">
<label for="">name</label>
<input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
</div>

<div class="form-group col-md-3">
<label for="">age</label>
<input type="text" name="age" id="" class="form-control" placeholder="age" aria-describedby="helpId">
</div>

<div class="form-group col-md-3">
<label for="">mobile</label>
<input type="text" name="mobile" id="" class="form-control" placeholder="mobile" aria-describedby="helpId">
</div>

<div class="form-group col-md-3">
<label for="">section</label>
<input type="text" name="section" id="" class="form-control" placeholder="section" aria-describedby="helpId">
</div>


<div class="form-group col-md-3">
<input type="submit" value="save" id="" class="submit-control" >
</div>
</form>


<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>mobile</th>
            <th>section</th>

            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @forelse (\App\Models\Student::all() as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->mobile}}</td>
                <td>{{$student->section}}</td>

                <td><a  class="btn btn-danger" href="students/{{$student->id}}/delete" role="button">delete</a></td>
             <td><a  class="btn btn-success" href="students/{{$student->id}}/edit" role="button">edit</a></td>
            </tr>
            @empty
              <td colspan="5">no students</td>
            @endforelse

        </tbody>
</table>





@endsection
