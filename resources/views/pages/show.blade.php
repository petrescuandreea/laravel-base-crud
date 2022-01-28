@extends('layouts.main-layout')

@section('content')
    <section>
        <h2>
            Comic: {{ $comic -> title}}
        </h2>
    
        <p>
            Author: {{ $comic -> author}} <br>
            Released on : {{ $comic -> release_date}} <br>
            Pages: {{ $comic -> pages}}
        </p>

        <a href="{{ route('home') }}">GO BACK</a>
    </section>
@endsection