@extends('ttt.layouts.master')

@section('content')
    {{-- <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('ttt.name') !!}
    </p> --}}
    <div id="app"></div>

    @include('ttt.header')

    @include('ttt.blockCenter')

    {{-- @include('ttt.backw') --}}

    @include('ttt.footer')

@endsection
