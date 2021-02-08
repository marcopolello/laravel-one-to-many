@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI TASKS</h1>
  <h1><a href="{{ route('task-create')}}">CREATE NEW TASK</a></h1>
  <h2><a href="{{route('emps-index')}}">INDEX DI EMPLOYEES</a></h2>

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
      <span><p><a href="{{ route('task-edit', $task -> id)}}">EDIT TASK</a></p></span>
    @endforeach
  </ul>


@endsection
