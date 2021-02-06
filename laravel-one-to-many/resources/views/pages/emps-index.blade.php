@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI EMPLOYEES</h1>

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
