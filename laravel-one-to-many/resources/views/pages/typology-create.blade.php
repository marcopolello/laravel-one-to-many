@extends('layouts.main-layout')

@section('content')

  <h1>NEW TYPOLOGY</h1>

  <form action="{{route('typ-store')}}" method="post">
    @csrf
    @method('POST')

    <label for="name">name</label>
    <input type="text" name="name">
    @error('name')
      <div style="color:red;"  class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>

    <label for="desc">description</label>
    <input type="text" name="desc">
    @error('desc')
      <div style="color:red;"  class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <br>

    <label for="tasks[]">Tasks:</label> <br>
    @foreach ($tasks as $task)
      {{-- {{ $task}} --}}
      <input
      type="checkbox"
      name="tasks[]"
      value="{{ $task -> id}}"> [{{ $task -> id}}]{{ $task -> title}} <br>
    @endforeach
    @error('tasks')
      <div style="color:red;"  class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <br>

    <input type="submit" name="" value="salva">

  </form>

@endsection
