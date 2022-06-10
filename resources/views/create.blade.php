<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Enregistrement</title>
</head>
<body class="body_submit">
    <div class="container">
        @if(count($error)>0)
        <div>
            <ul>
                @foreach($error->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if($message= Session::get('success'))
            <div class="alert">
                <button type="button" class ="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
            @endif
           <form id="form" action="{{route('agent.store')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class=form-group>
               <label>Prénom</label>
               <input type="text" class="form-control" name="prenom" id="prenom">
               </div>
               <br>
               <div class=form-group>
               <label>Nom</label>
               <input type="text" class="form-control" name="nom" id="nom">
               </div>
               <br>
               <div class=form-group>
               <label>Téléphone</label>
               <input type="text" class="form-control" name="numTel" id="numTel">
               </div>
               <br>
               <div class=form-group>
               <label>Adresse</label>
               <input type="text" class="form-control" name="adresse" id="adresse">
               </div>
               <br>
               <div class=form-group>
               <label>Email</label>
               <input type="email" class="form-control" name="email" id="email">
               </div>
               <br>
               <div class=form-group>
               <label>Mot de Passe</label>
               <input type="password" class="form-control" name="pass" id="pass">
               </div>
               <br>
              <input type="reset" name="vider" value="Réinitialiser" class="btn">
              <input type="submit" value="Soumettre" class="btn">
           </form>

    </div>
    
</body>
</html>