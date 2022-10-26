<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etablissements</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('etablissements.create') }}" class="btn btn-md btn-success mb-3">CREE</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Address</th> --}}
                                <th scope="col">Nombre de Classes</th>
                                <th scope="col">Capacite Etudiants</th>
                                <th scope="col">Nombre Enseignants</th>

                                <th scope="col">ACTIONS</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($etablissements as $etablissement)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/etablissements/').$etablissement->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td ><span>{{ $etablissement->nom }}</span></td>
                                    <td>{!! $etablissement->telephone !!}</td>
                                    <td>{!! $etablissement->email !!}</td>
                                    {{-- <td>{!! $etablissement->address !!}</td> --}}
                                    <td>{!! $etablissement->nombreClasses !!}</td>
                                    <td>{!! $etablissement->capaciteEtudiants !!}</td>
                                    <td>{!! $etablissement->nombreEnseignants !!}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Delete ?');" action="{{ route('etablissements.destroy', $etablissement->id) }}" method="POST">
                                            <a href="{{ route('etablissements.edit', $etablissement->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="{{ url('/classes/'.$etablissement->id) }}" class="btn btn-md btn-success mb-3">Voir Classes</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Etablissements
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          {{ $etablissements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>
