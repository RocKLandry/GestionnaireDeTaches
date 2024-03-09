<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taches; //j'importe le model car je vais instancier la classe Tache

class TacheController extends Controller
{
     // Fonction qui renvoit la page de l'ajout d'une Tache
     public function ajouter_tache()
     {
         return view('Tache.ajouterTache');
 
     }


     //Fonction qui ajoute une tache dans la BD
     public function ajouter_tache_execution(Request $request)
     {  //la variable request permet de tester les données saisies et 
        //exigent ces données
        $request->validate([
            'name_task'=>'required'
        ]);

        //instanciation de la classe Tache
        $maTache =new Taches();

        $maTache->name_task = $request->name_task;

        //Cette methode enregistre sur la BD notre objet maTache
        $maTache->save();
        //Là on se redirige vers la page /ajouter apres avoir enregister 
        //une tache ; et on affiche un message
        return redirect('/ajouter')-> with('status','La tache a été ajouté avec succès');


     }


    // Fonction qui renvoit la page  d'affichage des Taches enregistrées dans la BD
    public function liste_tache()
    {   //cette fonction retourne une vue nommée: Vue_Tache qu'on doit
        //etre  crée dans le dossier ressources>view
        //on peut creer un dossier:Tache dans lequel on cree un fichier: 
        //listeTache.blade.php  et ajouter.blade.php

        $mesTache = Taches::all(); // on cree une variable tache
        // qui contient toutes les taches de la BD 
        //et on injecte cette variable dans le return
        
        return view('Tache.listeTache',compact('mesTache'));
    }

    // Fonction qui renvoit la page de modification ou MAJ d'une Tache
    public function modifier_tache($id)
    {   //on recherche d'abord la tache qu'on veut modifier
        $maTache=Taches::find($id);
        //on retourne une vue avec la tache dont on retrouver l'id
        return view('Tache.modifierTache',compact('maTache'));

    }

    //Fonction qui effectue reellement la modification d'une Tache

    public function modifier_tache_execution(Request $request)
    {
        $request->validate([
            'name_task'=>'required'
        ]);
        $maTache =Taches::find($request->id);
   
        $maTache->name_task = $request->name_task;

        $maTache->update();

        return redirect('/tache')-> with('status','La tache a été modifiée avec succès');
    }


    //Fonction qui supprime reellement  d'une Tache
    public function supprimer_tache_execution($id)
    {   
        //comme les id sont auto incrémentés, en cas de suppresion
        // les valeurs id supprimées ne reviennent pas du coup on peut
        //d'afficher les id on va fficher une directive php qui liste les
        //taches en incrmentant une var qui affichera à la place des id 
        $maTache =Taches::find($id);
        $maTache->delete();
        return redirect('/tache')-> with('status','La tache a été supprimée avec succès');
    }


}
