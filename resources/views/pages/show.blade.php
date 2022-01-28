@extends('layouts.main-layout')

@section('content')
    <section>
        <h2>
            Comic: {{ $comic -> title}}
        </h2>
    
        <p>
            Author: {{ $comic -> author}} <br>
            Released on : {{ $author -> release_date}} <br>
            Pages: {{ $comic -> pages}}
        </p>
    </section>
@endsection