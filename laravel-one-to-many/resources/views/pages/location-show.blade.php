@extendS('layouts.main-layout')

@section('content')

  <h1>show DI LOCATION:  [{{$location -> id}}]</h1>

  <h2>{{$location -> name}}</h2> <br>
  <h2>{{$location -> coord}}</h2>


@endsection
