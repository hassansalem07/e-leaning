@extends('layouts.master')

@section('cont')


    <h1>add new category</h1>
    <form action="categories" method="post">
        @csrf
<div class="form-group col-md-3">
  <label for="">name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
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
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>


                    <td><a  class="btn btn-danger" href="categories/{{$category->id}}/delete" role="button">delete</a></td>
                 <td><a  class="btn btn-success" href="categories/{{$category->id}}/edit" role="button">edit</a></td>
                </tr>
                @empty
                  <td colspan="5">no categories</td>
                @endforelse

            </tbody>
    </table>
    @endsection

    