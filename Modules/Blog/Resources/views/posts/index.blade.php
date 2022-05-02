@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded dff from module: {!! config('blog.name') !!}
    </p>
@endsection