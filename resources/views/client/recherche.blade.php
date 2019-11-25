@extends('layouts.app')
@section('content')

<div class="blockRecherche">
    @isset($barreRecherche)
        <h3>Les resultats de votre recherche " <strong>{{ $barreRecherche }}</strong> ".</h3> 
        <p>
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Resumer</th>
                        <th scope="col">Description</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Lien</th>
                    </tr>
                </thead>
                @foreach ($recherche as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->titre }}</td>
                            <td>{{ $item->resumer }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->auteur }}</td>
                        <td><a href="/mediatheque"> + d'information > </a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </p>
    @endisset
    @empty($barreRecherche)
        <h3>Le champ est vide, la recherche n'a pas pu aboutir !</h3>
    @endempty
</div>

@endSection