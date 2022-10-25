
@extends('evenements.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>evenement CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/evenements/create') }}" class="btn btn-success btn-sm" title="Add New evenement">
Ajouter un nouveau evenement </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre du evenement</th>
                                        <th>Description de l'evenement </th>
                                        <th>Date de l'event</th>
                                        <th>Statut</th>
                                        <th>Date de création l'event</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($evenements as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->titre }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>
                                            <a href="{{ url('/evenements/' . $item->id) }}" title="View evenement"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button></a>
                                            <a href="{{ url('/evenements/' . $item->id . '/edit') }}" title="Edit evenement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
  
                                            <form method="POST" action="{{ url('/evenements' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete evenement" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
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