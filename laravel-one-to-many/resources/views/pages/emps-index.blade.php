@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI EMPLOYEES</h1>
  <h2>
    <a href="{{route('tasks-index')}}">INDEX TASKS</a>
  </h2>



  <ul>
    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emp-show', $emp -> id)}}">
        {{$emp -> name}}
        {{$emp -> lastname}}
        {{$emp -> dateOfBirth}}
        </a>
      </li>
    @endforeach
  </ul>


@endsection
