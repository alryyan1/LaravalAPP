@extends('layout.layout')


@section('new')
<h1>قائمه المرضي</h1>
 <div class="list">
    <ul>
         @foreach ($patients as $patient)
        <li >{{$patient->name}} ({{$patient->doctor->name}}) </li>
    @endforeach
    </ul>
 </div>
   
@endsection