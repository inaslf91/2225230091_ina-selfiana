@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Pembelian</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{$students->Nama}}</h5>
            <h5 class="card-title">Email   : {{$students->Email}}</h5>
            <h5 class="card-title">NIK   : {{$students->NIK}}</h5>
            <h5 class="card-title">Stasiun Keberangkatan : {{$students->StasiunKeberangkatan}}</h5>
            <h5 class="card-title">Stasiun Tujuan : {{$students->StasiunTujuan}}</h5>

        </div>
    </div>
</div>