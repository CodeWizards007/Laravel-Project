<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cree Classe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

<div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nom Classe</label>
                                <input type="text" class="form-control @error('nomClasse') is-invalid @enderror" name="nomClasse" value="{{ old('nomClasse') }}" placeholder="nomClasse">

                                <!-- error message untuk title -->
                                @error('nomClasse')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nombre Etudiants</label>
                                <input type="number" class="form-control @error('nombreEtudiants') is-invalid @enderror" name="nombreEtudiants" value="{{ old('nombreEtudiants') }}" placeholder="nombreEtudiants">

                                <!-- error message untuk title -->
                                @error('nombreEtudiants')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
<div class="form-group">
<label class="font-weight-bold">Etablissement</label>
                            <select class="form-control" name="etablissement_id">
                            @foreach($etabs as $etab)
                            <option value="{{$etab['id']}}">{{$etab['nom']}}</option>
                            @endforeach
                            </select>
</div>



                            <button type="submit" class="btn btn-md btn-primary">SUBMIT</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
