@extends('layouts.app')

@section('title', 'Friends')

@section('content')


  <div class="card">
    <div class="card-body">
      <h3> Nama : {{ $friends['nama'] }} </h3>
      <h5> No Tlp : {{ $friends['no_tlp']}} </h5>
      <p> Alamat : {{ $friends['alamat'] }} </p>
    </div>
  </div>

    
@endsection