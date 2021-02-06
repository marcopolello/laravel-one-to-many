@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI TASKS</h1>

  <ul>
    @foreach ($tasks as $task)
      <li style="border: 1px solid black; padding: 3px;">
        <a href="{{ route('task-show', $task -> id)}}">
        title:{{$task -> title}} <br>
        desc:{{$task -> desc}} <br>
        priority:{{$task -> priority}} <br>
        employee_id:{{$task -> employee_id}}
        </a>
      </li>
    @endforeach
  </ul>


@endsection
