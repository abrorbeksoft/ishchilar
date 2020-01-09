@extends('parent.parent')

@section("navbar")
    @parent
@show

@section('body')
    <div id="app">
        <example-component></example-component>
    </div>
@endsection

@section('footer')
@show

