@extends('layouts.base')

@section('title', 'ajouter une statue')
@section('liste', '/css/liste.css')


@section('content')
    <section class="container">
        <table>
            <h2>Toute vos statues</h2>
            <tr>
                <th>Nom de la statue</th>
                <th>Artiste</th>
                <th>Origine</th>
                <th>Date de création</th>
                <th>Estimation prix</th>
                <th>Suprimer</th>
                <th>Modifier</th>

            </tr>
            @foreach ($statues as $statue)
                <tr>
                    <td>{{$statue->name}}</td>
                    <td>{{$statue->artist}}</td>
                    <td>{{$statue->origin}}</td>
                    <td>{{$statue->date}}</td>
                    <td>{{$statue->selling_price}}€</td>
                    <td>
                        <form action="/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$statue->id}}">
                            <input type="submit" value="🗑">
                        </form>
                    </td>
                    <td>
                        <form action="/edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$statue->id}}">
                            <input type="submit" value="🖌">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>

@endsection