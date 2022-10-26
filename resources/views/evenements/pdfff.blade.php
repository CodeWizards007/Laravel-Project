@extends('evenements.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Evenements</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">PDF Evenements</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                <th>Titre du evenement</th>
                                        <th>Description de l'evenement </th>
                                        <th>ID du créateur</th>
                                        <th>Date de l'event</th>
                                        <th>Statut</th>
                                        <th>Date de création l'event</th>
                </tr>
            </thead>
            <tbody>
            @foreach($evenements as $item)
                                    <tr>
                                        <td>{{ $item->titre }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->user_id }} </td>
                                        <td>{{ $item->date }}</td>
                                        <td>@if ($item->status == 0) <label style="color:blue">Non traité</label>
                                            @elseif ($item->status == 1)
                                                <label style="color:green">Accepté</label>

                                            @elseif ($item->status == 2)
                                            <label style="color:red">Refusé</label>
                                                @endif
                                        <td>{{ $item->created_at}}</td>
                                    </tr>
                                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>