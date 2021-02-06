@extendS('layouts.main-layout')

@section('content')

  <h1>show DI TASK:  [{{$task -> id}}]</h1>

  <h2>titolo:{{$task -> title}}</h2>
  <h2>descrizione:{{$task -> desc}}</h2>
  <h2>priorità: [{{$task -> priority}}]</h2>
  <a href="{{route('emp-show', $task -> employee_id)}}">
    <h2>dipendente che andrà a svolgere task: ID[
    {{$task -> employee_id}}
    ]
    </h2>
  </a>

  <a href="{{ route('tasks-index')}}"><h1 class="">INDIETRO A TASKS-INDEX</h1></a>

@endsection
