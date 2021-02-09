@extends('layouts.main-layout')

@section('content')

  <h1>NEW TYPOLOGY</h1>

  <form action="{{route('typ-store')}}" method="post">
    @csrf
    @method('POST')

    <label for="name">name</label>
    <input type="text" name="name">

    <br>

    <label for="desc">description</label>
    <input type="text" name="desc">

    <br>
    <br>

    <label for="task_id[]">Tasks:</label> <br>
    @foreach ($tasks as $task)
      {{-- {{ $task}} --}}
      <input
      type="checkbox"
      name="task_id[]"
      value="{{ $task -> id}}"> [{{ $task -> id}}]{{ $task -> title}} <br>
    @endforeach

    <br>
    <br>

    <input type="submit" name="" value="salva">

  </form>

@endsection
