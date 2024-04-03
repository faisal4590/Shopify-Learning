@extends('shopify-app::layouts.default')

@section('content')
    <p>You are: {{ Auth::user()->name }}</p>
    <p>Your shop URL is: {{ Auth::user()->name }}</p>
    <p>Testing github co-pilot</p>
@endsection