@extends('layouts.app')

@section('content')

<h1>This is the Welcome section</h1>

@php
    $grade = 85;
@endphp

@if($grade >= 90)

    <h2>Excellent</h2>

@elseif($grade >= 70)

    <h2>Approved</h2>

@else

    <h2>Failed</h2>

@endif

<p>
    Welcome to activity 11.
</p>

<p>
    Grade: {{ $grade }}
</p>

@endsection