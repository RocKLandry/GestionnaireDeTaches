<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD  DANS LE GESTIONNAIRE DE TACHES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

<div class="container">
    <div class="row">
                
        <div class="col s12">
            
            <h1>Modifier une TACHE</h1>
             <hr>
            <form action="/modifier/execution" method="POST">
               
                 <div class="mb-3">
                    <label for="Nom" class="form-label">Nom de la Tache</label>
                    <input type="text" class="form-control" id="Nom" name="Nom" >
                 </div>
                
                 <button type="submit" class="btn btn-primary">Modifier une tache</button>

            </form>
             <br><br>
            <a href="/tache" class="btn btn-danger"> Revenir à la liste des Taches</a>
             
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> -->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD  DANS LE GESTIONNAIRE DE TACHES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

<div class="container">
    <div class="row">
                
        <div class="col s12">
            
            <h1>Modifier une TACHE</h1>
             <hr>
 <!--Permet de verifier si mon status est Ok et affiche le texte 
que j'ai mis dans ma fonction return redirect ...with...-->
             @if (session('status'))
              <div class="alert alert-success">
                {{ session('status')}}
              </div>
            @endif

  <!--affiche les erreurs lors de la saisie et enregistrement dans la BD -->
            <ul>
              @foreach($errors->all() as $error)
                <li class="alert alert-danger"> {{$error}}</li>
              @endforeach
            </ul>


            <form action="/modifier/execution" method="POST">
                @csrf <!--Obligatoire pour enregistrer les données -->


          <!-- Ce champ  recupere l'id de la tache à modifier et
          cet id sera utilisé dans le controler pour la methode modifier_tache -->
                <input type="text" name="id" style="display : none;" value="{{$maTache->id}}">


                 <div class="mb-3">
                    <label for="name_task" class="form-label">Nom de la Tache</label>
                    <!--l'attribut name c'est le nom d'un champ oû l'informée sera stockée -->
                    <input type="text" class="form-control" id="Name_task" name="name_task" value="{{ $maTache->name_task }}">
                 </div>
                
                 <button type="submit" class="btn btn-primary">Modifier une tache</button>

            </form>
             <br><br>
            <a href="/tache" class="btn btn-danger"> Revenir à la liste des Taches</a>
             
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>