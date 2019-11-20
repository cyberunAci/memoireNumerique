@extends('layouts.app')
@section('content')

<p>Votre recherche : 
    @foreach ($recherche as $item)
    <p>
        <a href="#">
            {{ $item->titre }}
        </a>
    </p>
    @endforeach
</p>

@endSection