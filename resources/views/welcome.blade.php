@extends('parent.parent')

@section("navbar")
    @parent
@show

<<<<<<< Updated upstream
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                @foreach($data as $d)
                    <li class="list-group-item"><a href="{{ $d->id }}">{{ $d->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>


{{--<div class="flex-center position-ref full-height">--}}
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@auth--}}
{{--<a href="{{ url('/home') }}">Home</a>--}}
{{--@else--}}
{{--<a href="{{ route('login') }}">Login</a>--}}

{{--@if (Route::has('register'))--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--@endif--}}
{{--@endauth--}}
{{--</div>--}}
{{--@endif--}}
{{--</div>--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
=======
@section('body')
    <div id="app">

    </div>
@endsection

@section('footer')
@show

>>>>>>> Stashed changes
