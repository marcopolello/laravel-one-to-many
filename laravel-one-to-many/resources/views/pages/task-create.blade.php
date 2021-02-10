@extends('layouts.main-layout')

@section('content')

  <h1>NEW TASK</h1>

  {{-- 'title',
  'desc',
  'priority', --}}

  <form action="{{route('task-store')}}" method="post">
    @csrf
    @method('POST')

    <label for="title">title</label>
    <input type="text" name="title">

    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>

    <label for="desc">desc</label>
    <input type="text" name="desc">

    @error('desc')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>

    <label for="priority">priority</label>
    <input type="text" name="priority">

    @error('priority')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>

    <label for="priority">employee</label>
    <select name="employee_id">
      @foreach ($emps as $emp)
        <option value="{{$emp -> id}}">
          {{$emp -> name}} {{$emp -> lastname}}
        </option>
      @endforeach
    </select>

    <br>

    <label for="typologies[]">Typologies:</label> <br>
    @foreach ($typs as $typ)
      <input
      type="checkbox"
      name="typologies[]"
      value="{{ $typ -> id}}"> {{ $typ -> name}} <br>
    @endforeach

    <br>
    <br>

    <input type="submit" name="" value="salva">

  </form>

@endsection
