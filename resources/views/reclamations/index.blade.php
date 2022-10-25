@extends('reclamations.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Page Reclamation</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/reclamation/create') }}" class="btn btn-success btn-sm" title="Add New Reclamation">
                        Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>titre</th>
                                <th>contenue</th>
                                <th>status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reclamations as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->titre }}</td>
                                <td>{{ $item->contenue }}</td>
                                @if($item->status == 0)
                                    <td>Non Traité</td>
                                @endif
                                @if($item->status == 1)
                                <td>Traité</td>
                                @endif
                                <td>
                                    <a href="{{ url('/reclamation/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/reclamation/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/reclamation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
