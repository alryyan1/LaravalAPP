@extends('layout.layout')


@section('new')
    @foreach ($specialists as $specialist)
        <h1>{{$specialist->name}}</h1>
    @endforeach
@endsection