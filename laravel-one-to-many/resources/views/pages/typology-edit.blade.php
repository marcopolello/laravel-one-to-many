@extends('layouts.main-layout')

@section('content')

  <h1>EDIT TYPOLOGY {{$typ -> id}}</h1>
  <a href="{{route('typs-index')}}">INDIETRO</a>

  <form action="{{route('typ-update', $typ -> id)}}" method="post">
    @csrf
    @method('POST')

    {{-- @php
      dd($typ -> tasks);
      dd($typ);
    @endphp --}}

    <label for="name">name</label>
    <input type="text" name="name" value="{{$typ -> name}}">
    @error('name')
      <div style="color:red;"  class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>

    <label for="desc">description</label>
    <input type="text" name="desc" value="{{$typ -> desc}}">
    @error('desc')
      <div style="color:red;" class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <br>

    <label for="tasks">Tasks:</label> <br>
    @foreach ($tasks as $task)
      {{-- {{ $task}} --}}
      <input
      type="checkbox"
      name="tasks[]"
      value="{{ $task -> id}}"
      @if ($typ -> tasks -> contains($task -> id))
          checked
      @endif
      > [{{ $task -> id}}]{{ $task -> title}} <br>
    @endforeach

    @error('tasks')
      <div style="color:red;"  class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <br>

    <input type="submit" name="" value="UPDATE">

  </form>

@endsection
