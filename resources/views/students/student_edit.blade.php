@extends('layout.layout')
@section('content')
<div class="card">
  <div class="card-header fw-bold">STUDENT EDIT</div>
  <div class="card-body">

    <form action="{{ url('update-student/' .$student->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
      <label>Name</label></br>
      <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
      <label>Birthday</label></br>
      <input type="date" name="birth" id="birth" value="{{$student->birth}}" class="form-control"></br>
      <label>Address</label></br>
      <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection