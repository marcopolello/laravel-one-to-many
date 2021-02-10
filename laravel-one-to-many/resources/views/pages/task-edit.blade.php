@extends('layouts.main-layout')
@section('content')
  <h1><a href="{{ route('tasks-index')}}">INDIETRO</a></h1>
  <h1>
    [{{ $task -> id }}]
    EDIT TASK
  </h1>
  <form action="{{ route('task-update', $task -> id) }}" method="POST">
      @csrf
      @method('POST')
      <label for="title">Name</label>
      <input name="title" type="text" value="{{ $task -> title }}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <br>
      <label for="description">Description</label>
      <input name="description" type="text" value="{{ $task -> desc }}">
      @error('desc')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <br>
      <label for="priority">Priority</label>
      <input name="priority" type="text" value="{{ $task -> priority }}">
      @error('priority')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <br>

      <label for="employee_id">Employee</label>
      <select name="employee_id">
        @foreach ($emps as $emp)
          <option value="{{ $emp -> id }}"
            @if ($task -> employee -> id == $emp -> id)
              selected
            @endif
          >
            {{ $emp -> name }}
            {{ $emp -> lastname }}
          </option>
        @endforeach
      </select>

      <br><br>
      {{-- @php
        dd($task -> typologies);
      @endphp --}}

      <label for="typologies[]">Typologies</label> <br>
      @foreach ($typs as $typ)
        <input
            name="typologies[]"
            type="checkbox"
            value="{{ $typ -> id }}"
            {{-- VERSIONE PRO --}}
            @if ($task -> typologies -> contains($typ -> id))
                checked
            @endif
            {{-- VERSIONE ESTESA --}}
            {{-- @foreach ($task -> typologies as $task_typology)
                @if ($task_typology -> id == $typology -> id)
                    checked
                @endif
            @endforeach --}}
        >
        {{ $typ -> name }}
        <br>
      @endforeach
      <br><br>
      <input type="submit" value="salva">
  </form>
@endsection
