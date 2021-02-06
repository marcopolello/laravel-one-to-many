@extendS('layouts.main-layout')

@section('content')

  <h1>show DI EMPLOYEE</h1>

  <ul>
    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emp-show')}}"></a>
        {{$emp -> name}}
        {{$emp -> lastname}}
        {{$emp -> dateOfBirth}}
      </li>
    @endforeach
  </ul>


@endsection
