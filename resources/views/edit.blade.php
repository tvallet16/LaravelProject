@extends('layouts.base')

@section('title', 'ajouter une statue')
@section('add', '/css/add.css')


@section('content')

    <section class="flex container">
        <h2>Modifier d'une status</h2>
        <form action="/update" method="POST" class="flex">
            @csrf
            <input type="hidden" name="id" value="{{$statue->id}}" id="">
            <input type="text" name="name" value="{{$statue->name}}" id="">
            <input type="text" name="artist" value="{{$statue->artist}}" id="">
            <input type="text" name="origin" value="{{$statue->origin}}" id="">
            <input type="number" name="date" value="{{$statue->date}}" id="">
            <input type="number" name="selling_price" value="{{$statue->selling_price}}" id="">
            <input type="submit" value="modifier">
        </form>
    </section>

@endsection
