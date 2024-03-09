<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD  DANS LE GESTIONNAIRE DE TACHES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container text-center">
            <div class="row">
                
                <div class="col s12">
                    <h1>CRUD DANS LE GESTIONNAIRE DE TACHE</h1>
                    
                     <hr>
            <!-- Lien qui renvoi la page ou route dont l'url est : /ajouter-->
                    <a href="/ajouter" class="btn btn-primary"> Ajouter une Tache</a>
                    <br> <br> <br><br>
                 
        <!-- Permet d'afficher un message pour la fonction modifier_Tache_execution-->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status')}}
                        </div>
                    @endif


                    <table class="table">
                        <thead> <!-- thead c'est la partie haute du tableau  -->
                            <hr> <!-- hr est une ligne horizonale -->
                            <tr>  <!-- tr c'est sont des lignes -->
                                 <th>#ID</th> <!-- th sont les colonnes de la ligne -->
                                 <th>Nom tache </th>
                                 <th>Date création </th>
                                 <th>Dernière modification </th>
                                 <th>Actions</th>  
                            </tr>
                        </thead>

                        <tbody> <!-- tbody c'est le contenu du tableau -->
                            <!--Affichages des Taches enregistrées dans la BD -->
                            @foreach($mesTache as $tache)
                            
                                <tr>  <!-- tr c'est sont des lignes -->
                                    <td>{{$tache->id}}</td> <!-- td sont les colonnes de la ligne -->
                                    <td>{{$tache->name_task}}</td>
                                    <td>{{$tache->created_at}}</td>
                                    <td>{{$tache->updated_at}}</td>
                                    <td>
                                        <a href="/modifier/{{$tache->id}}" class="btn btn-info">Modifier</a>
                                        <a href="/supprimer/{{$tache->id}}" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>

                            @endforeach

                           
                        </tbody>
                    </table>

                        
                </div>
            </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>