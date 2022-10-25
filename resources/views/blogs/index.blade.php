@extends('blogs.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>BLOG CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/blogs/create') }}" class="btn btn-success btn-sm" title="Add New blog">
Ajouter un nouveau blog </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre du blog</th>
                                        <th>Contenu du blog </th>
                                        <th>Cree Par</th>
                                        <th>Date de création</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->titre }}</td>
                                        <td>{{ $item->contenu }}</td>
                                        <td>{{ $item->creePar }}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>
                                            <a href="{{ url('/blogs/' . $item->id) }}" title="View blog"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Afficher</button></a>
                                            <a href="{{ url('/blogs/' . $item->id . '/edit') }}" title="Edit blog"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
  
                                            <form method="POST" action="{{ url('/blogs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete blog" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
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