@extendS('layouts.main-layout')

@section('content')

  <h1>show DI EMPLOYEE:  [{{$emp -> id}}]</h1>

  {{-- <div class="">
    {{$emp -> tasks}}
  </div> --}}

  <h2>{{$emp -> name}}</h2>
  <h2>{{$emp -> lastname}}</h2>
  <h2>{{$emp -> dateOfBirth}}</h2>

  <h2>tasks:</h2>
  <ul>
    @foreach ($emp -> tasks as $task)
      {{-- @php
        dd($emp -> tasks)
      @endphp --}}
      {{-- @if ($emp -> tasks -> exist())
        <h2>non ci sono tasks</h2>
      @endif --}}
      @if ($emp -> tasks -> count() >= 1)
        <a href="{{route('task-show', $task -> id)}}">
          <li>
          titolo:{{$task -> title}} <br>
          description:{{$task -> desc}} <br>
          priorità:{{$task -> priority}}
          </li>
        </a>
      @else
        <h2>non ci sono tasks</h2>
      @endif

    @endforeach
  </ul>

  <a href="{{ route('emps-index')}}"><h1 class="">INDIETRO A EMPLOYEES-INDEX</h1></a>


@endsection
