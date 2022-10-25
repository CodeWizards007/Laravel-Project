
@extends('forums.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Liste des Forums</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/forum/create') }}" class="btn btn-success btn-sm" title="Ajouter Nouveau Forum">
                        Ajouter
                    </a>
                    <br/>
                    <br/>
                   <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th>Date de création</th>
                                <th>Dernière modification</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($forums as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->titre }}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->updated_at }}</td>

                                <td>
                                    <a href="{{ url('/forum/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
