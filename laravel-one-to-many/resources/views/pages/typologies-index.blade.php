@extendS('layouts.main-layout')

@section('content')

  <h1>INDEX DI typologies</h1>
  <h1><a href="{{ route('typ-create')}}">CREATE NEW TYP</a></h1>


  <ul>
    @foreach ($typs as $typ)
      <li>
        <a href="{{ route('typ-show', $typ -> id)}}">
        {{$typ -> name}}
        {{$typ -> desc}}
        </a>
      </li>
    @endforeach
  </ul>


@endsection
