


@section('title', 'Home')

@section('content')
    <h1>Hello, I'm {{ $developer['name'] }}</h1>
    <h2>{{ $developer['job_title'] }}</h2>
    
    <h3>My Skills:</h3>
    <ul>
        @foreach($developer['skills'] as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection