@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>This is Nike's first website</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar.</p>
@endsection