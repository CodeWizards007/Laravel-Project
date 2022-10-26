@extends('evenements.layout')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beautiful Bootstrap Contact Form with Gradient Background</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	html, body {
		min-height: 100%;
	}
    body {
        background: #ff5e63; /* Fallback for browsers that don't support gradients */
        font-family: "Varela Round", sans-serif;
		background: linear-gradient(#ff9968, #ff5e63)  no-repeat;
    }
	.form-control {
		border-color: #d7d7d7;
		box-shadow: none;
	}
	.form-control:focus, .btn:focus {
		border-color: #a177ff;
		box-shadow: 0 0 8px #c2a8ff;
	}
    .contact-form {
		width: 500px;   
        margin: 0 auto;
        padding: 40px 0;
    }
    .contact-form form {
        background: #fff;
        padding: 40px;
        border-radius: 6px;
    }
    .contact-form h1 {
		text-align: center;
		font-size: 50px;
        margin: 0 0 15px;
    }
	.contact-form .form-group {
		margin-bottom: 20px;
	}
    .contact-form .form-control, .contact-form .btn  {        
        border-radius: 2px;
		min-height: 40px;
		transition: all 0.5s;
		outline: none;
    }
    .contact-form .btn {
        background: #a177ff;
		font-size: 16px;
		min-height: 50px;
		border: none;
    }
    .contact-form .btn:hover, .contact-form .btn:focus {
        background: #8048ff;
		outline: none;
    }
	.contact-form .btn i {
		margin-right: 5px;
	}
    .contact-form label {
        color: #bbb;
		font-weight: normal;
    }
    .contact-form textarea {
        resize: vertical;
    }
    .hint-text {
        font-size: 15px;
		text-align: center;
        padding-bottom: 25px;
        opacity: 0.8;
    }
</style>
</head>
<body>
<div class="contact-form">
	<form action="{{ url('evenements') }}" method="post">
  {!! csrf_field() !!}
  <h1>Ajouter un evenement</h1>
		<div class="form-group">
			<label for="inputName">Nom de l'evevenement</label>
      <input type="text" name="titre" id="titre" class="form-control">
    </div>
		<div class="form-group">
			<label for="inputMessage">Description de l'evenement</label>
			<textarea class="form-control" name="description" id="contenu" description="5" required></textarea>
		</div>
    <div>
    <label for="inputMessage">Date et heure de l'evenement : </label>
    <input type="datetime-local" name="date" id="date" class="form-control">
    </div>
		<div>
    <label for="inputMessage">Statut de l'evenement</label>
    <select class="form-control" name="status" id="status">
      <option value=0>Non traité</option>
  </select>
    </div>
    <h2></h2>
    <div>
      <label>Créé Par : </label>
		<select name="user_id" id="user_id">
                    @foreach ($users as $u)
                        <option value="{{$u->id}}">{{$u->prenom}} {{$u->nom}}</option>
                    @endforeach
                </select>
		</div>
    <h2></h2>
		<button type="submit" class="btn btn-primary btn-block"></i> Ajouter</button>
	</form>
</div>
</body>
</html>