@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Input Data Pembelian Tiket KAI Lokal</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan nama lengkap"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" class="form-control" placeholder="ch: xxx123@gmail.com"></br>
        <label>NIK</label></br>
        <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Masukkan 16 digit"></br>
        <label>Stasiun Keberangkatan</label></br>
        <input type="text" name="StasiunKeberangkatan" id="StasiunKeberangkatan" class="form-control" placeholder="ch:Stasiun Serang"></br>
        <label>Stasiun Tujuan</label></br>
        <input type="text" name="StasiunTujuan" id="StasiunTujuan" class="form-control" placeholder="ch:Stasiun Serang"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop