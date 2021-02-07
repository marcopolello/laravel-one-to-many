@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI LOCATIONS</h1>


  <ul>
    @foreach ($locations as $location)
      <li>
        <a href="{{ route('location-show', $location -> id)}}">
        {{$location -> name}}
        {{$location -> coord}}
        </a>
      </li>
    @endforeach
  </ul>


@endsection
