@extends('layout.layout')
@section('title','Student')
@section('content')

@if(Session::has('message'))
<p class="alert alert-success">{{Session::get('message')}}</p>
@endif
<div class="mt-5">
  <table class="table table-dark" border="1">
    <thead>
      <tr>
        <td class="f-bold" align="center">Id</td>
        <td class="f-bold" align="center">Name</td>
        <td class="f-bold" align="center">Birth</td>
        <td class="f-bold" align="center">Address</td>
        <td class="f-bold" align="center">Actions</td>


      </tr>
    </thead>
    <tbody>
      @foreach($student as $item)
      <tr>
        <td align="center" class="table-light">{{ $item->id }}</td>
        <td align="center" class="table-light">{{ $item->name }}</td>
        <td align="center" class="table-light">{{ $item->birth }}</td>
        <td align="center" class="table-light">{{ $item->address }}</td>
        <td align="center" class="table-light">
          <a href="{{ url('/edit-student/' . $item->id) }}" title="Edit Student"><button
              class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        </td>



        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection