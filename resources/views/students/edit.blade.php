@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" nama="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="Nama" id="Nama" value="{{$students->Nama}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" value="{{$students->Email}}" class="form-control"></br>
        <label>NIK</label>
        <input type="text" name="NIK" id="NIK" value="{{$students->NIK}}" class="form-control"></br>
        <label>Stasiun Keberangkatan</label>
        <input type="text" name="StasiunKeberangkatan" id="StasiunKeberangkatan" value="{{$students->StasiunKeberangkatan}}" class="form-control"></br>
        <label>Stasiun Tujuan</label>
        <input type="text" name="StasiunTujuan" id="StasiunTujuan" value="{{$students->StasiunTujuan}}" class="form-control"></br>
        <input type="submit" value="Ubah" class="btn btn-success"></br>
      </form>
    </div>
