@extendS('layouts.main-layout')

@section('content')

  <h1>show DI typology:  [{{$typ -> id}}]</h1>

  <h2>{{$typ -> name}}</h2> <br>
  <h2>{{$typ -> desc}}</h2>


@endsection
