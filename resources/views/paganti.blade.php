@extends('layouts.main-layout')

@section('content')
  <h2>PAGANTI</h2>
  <ol>
    @foreach ($paganti as $pagante)
      <li>{{ $pagante -> name}} {{ $pagante -> lastname}}</li>
    @endforeach
  </ol>
@endsection
