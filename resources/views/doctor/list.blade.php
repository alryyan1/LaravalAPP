@extends('layout.layout')


@section('new')
    @foreach ($doctors as $doctor)
        <h1>{{$doctor->name}}</h1>
    @endforeach
@endsection