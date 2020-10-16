@extends('layouts.base')

@section('title', 'ajouter une statue')
@section('add', '/css/add.css')


@section('content')
    <section class="flex container">
        <h2>Ajouter une statue</h2>
        <form action="/add" method="POST" class="flex">
            @csrf
            <input type="text" name="name" value="le penseur" id="">
            <input type="text" name="artist" value="obelix" id="">
            <input type="text" name="origin" value="gaule" id="">
            <input type="number" name="date" value="-52" id="">
            <input type="number" name="selling_price" value="2" id="">
            <input type="submit" value="ajouter">
        </form>
    </section>

@endsection