<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use File;
use Image;
use App\Etaplissemment;
use App\Feliere;
use App\Module;
use App\Deplome;
use App\Element;
use App\Semstr;
class etabliss extends Controller
{
//==========
public function showetabliss(){
    $etap = Etaplissemment::all();
    return  view('home',compact('etap'));
}
//========================================================== selection deplome
public function showdeplome($id){
   $tes= DB::select("select * from etaplissemments where id_etablessement = ?",[$id]);
   $dep =  DB::select("select * from deplomes where nom_etap= ?",[$tes[0]->id_etablessement]);
   return  view('deplome',compact('dep'));
}
//==========================================================
public function showinfo(){
    $etab = Etaplissemment::all();
    $file = Feliere::all();
    $mod = Module::all();
    $semestre = semstr::all();
    return  view('ajouter',compact('etab','file','mod','semestre'));
}
//========================================================== selection filiere
public function info($id)
{
   $tes= DB::select("select * from etaplissemments where nom_etablessement = ?",[$id]);
   $fil =  DB::select("select * from felieres where nom_etabless= ?",[$tes[0]->nom_etablessement]);
   return  view('filiere', compact('fil'));
}
//========================================================== selection module
public function modul($nom)
{
   $mode = DB::select("select * from semstrs where nom_s = ?",[$nom]);
   $module =  DB::select("select * from modules where nom_se = ?",[$mode[0]->nom_s]);
   return  view('module', compact('module'));
}
//========================================================== selection element
public function element($nom)
{
   $elem = DB::select("select * from modules where nom_module= ?",[$nom]);
   $element =  DB::select("select * from elements where nom_mod = ?",[$elem[0]->nom_module]);
   return  view('element', compact('element'));
}
//==========================================================  selection semestre
public function semestre($nom)
{
   $s = DB::select("select * from felieres where nom_filiere = ? ",[$nom]);
   $sem =  DB::select("select * from semstrs where nom_file = ?",[$s[0]->nom_filiere]);
   return  view('semestre', compact('sem'));
}


//========================================================== ajouter etablessement
public function insertetab(Request $request){
 $nom_etablessement = $request->input('nom_etablessement');
$local_etablessement = $request->input('local_etablessement');
if ($request->has('images')) {
   $files = $request->file('images');
 // Define upload path
  $destinationPath = public_path('/images/'); // upload path
// Upload Orginal Image           
  $profileImage =$nom_etablessement. '.' . $files->getClientOriginalExtension();
  $request->file('images')->move($destinationPath, $profileImage);
  
$data=array('nom_etablessement'=>$nom_etablessement,'local_etablessement'=>$local_etablessement,'image' => $profileImage);
DB::table('etaplissemments')->insert($data);
return redirect('ajouter');
/* echo '<h1 align="center">'. 'saved'.'</h1>'; */

   }
}
//========================================================== ajouter filiere
public function insertetabfil(Request $request){
 $nom_filiere = $request->input('nom_filiere');
$nummodel = $request->input('nummodel');
$nom_etabless = $request->input('nom_etabless');
$nom_se = $request->input('nom_se');
$data=array('nom_filiere'=>$nom_filiere,'nummodel'=>$nummodel,'nom_etabless'=>$nom_etabless);
DB::table('felieres')->insert($data);
//echo "<script>Swal.fire('Les donnés ont été enregistrées !')</script>";
return redirect('ajouter');

}
//========================================================== ajouter semester
public function insertetabsemestre(Request $request){
   $nom_s = $request->input('nom_s');
  $nom_file = $request->input('nom_fil');
  $nom_etabless = $request->input('id_etabless');

  $data=array('nom_s'=>$nom_s." ".$nom_file,'nom_file'=>$nom_file,'nom_etabless'=>$nom_etabless);
  DB::table('semstrs')->insert($data);
  //echo "<script>Swal.fire('Les donnés ont été enregistrées !')</script>";
  return redirect('ajouter');
  
  }
//========================================================== ajouter module
public function insertetabmod(Request $request){
    $nom_module = $request->input('nom_module');
   $num_element = $request->input('num_element');
   $nom_fil = $request->input('nom_fil');
   $nom_etabless = $request->input('nom_etabless');
   $nom_se = $request->input('nom_se');
   $data=array('nom_module'=>$nom_module,'num_element'=>$num_element,'nom_fil'=>$nom_fil,'nom_etabless'=>$nom_etabless,'nom_se'=>$nom_se);
   DB::table('modules')->insert($data);
   $message="les données a ete inserer";
  // echo "<script type='text/javascript'>alert('$message');</script>";
   return redirect('ajouter');
   }
//========================================================== ajouter element 
public function insertetabelem(Request $request){
    $nom_element = $request->input('nom_element');
   $nom_mod = $request->input('nom_mod');
   $nom_etabless = $request->input('nom_etabless');
   $horaire_element = $request->input('horaire_element');
   $data=array('nom_element'=>$nom_element,'nom_mod'=>$nom_mod,'nom_etabless'=>$nom_etabless,'horaire_element'=>$horaire_element );
   DB::table('elements')->insert($data);
   /* $message="les données a ete inserer"; */
  // echo "<script type='text/javascript'>alert('$message');</script>";
   return redirect('ajouter');
   }
//========================================================== ajouter deplome
   public function insertetabdeplome(Request $request){
      $nom_deplome = $request->input('nom_deplome');
     $type_deplome = $request->input('type_deplome');
     $duree_deplome = $request->input('duree_deplome');
     $nom_etap = $request->input('nom_etap');
     $data=array('nom_deplome'=>$nom_deplome,'type_deplome'=>$type_deplome,'duree_deplome'=>$duree_deplome,'nom_etap'=>$nom_etap );
     DB::table('deplomes')->insert($data);
     $message="les données a ete inserer";
     echo "<script type='text/javascript'>alert('$message');</script>";
     return redirect('ajouter');
     }
//========================================================== show info

public function showNometab(){
   $etap = Etaplissemment::all();
   return view('update/update-etablessement',compact('etap'));
} 
public function showNomfil(){
   $file = Feliere::all();
   return view('update/update-filiere',compact('file'));
} 
public function showNommod(){
   $mod = Module::all();
   return view('update/update-module',compact('mod'));
} 
public function showNomelem(){
   $elem = Element::all();
   return view('update/update-element',compact('elem'));
} 
public function showNomdep(){
   $dep = Deplome::all();
   return view('update/update-deplome',compact('dep'));
} 
public function showNomsem(){
   $etap = Etaplissemment::all();
   $file = Feliere::all();
   $semestre = semstr::all();
   return view('update/update-semestre',compact('file','etap','semestre'));
} 
//========================================================== update etabblessement
public function updateetab(Request $request){
   $nom = $request->input('nom');
  /*  echo "<script type='text/javascript'>alert('$id');</script>"; */
     $nom_etablessement = $request->input('nom_etablessement');
   $local_etablessement = $request->input('local_etablessement');
   DB::table('etaplissemments')
       ->where('nom_etablessement', $nom)
       ->update(array('nom_etablessement' => $nom_etablessement,'local_etablessement'=>$local_etablessement));
       DB::table('filieres')
       ->where('nom_etabless', $nom)
       ->update(array('nom_etabless' => $nom_etablessement));
       DB::table('semstrs')
       ->where('nom_etabless', $nom)
       ->update(array('nom_etabless' => $nom_etablessement));
       DB::table('modules')
       ->where('nom_etabless', $nom)
       ->update(array('nom_etabless' => $nom_etablessement));
       DB::table('elements')
       ->where('nom_etabless', $nom)
       ->update(array('nom_etabless' => $nom_etablessement));
       DB::table('deplomes')
       ->where('nom_etap', $nom)
       ->update(array('nom_etap' => $nom_etablessement));
return redirect('update/update-etablessement');
} 
//========================================================== update filiere
 public function updatefiliere(Request $request){
    $nom = $request->input('nom');
  /*   echo "<script type='text/javascript'>alert('$nom');</script>"; */
    $nom_filiere = $request->input('nom_filiere');
   $nummodel = $request->input('nummodel');
   DB::table('felieres')
       ->where('nom_filiere', $nom)
       ->update(array('nom_filiere' => $nom_filiere,'nummodel'=>$nummodel  )); 
       DB::table('modules')
       ->where('nom_fil', $nom)
       ->update(array('nom_fil'=> $nom_filiere));
       
       return redirect('update/update-filiere');
}  
//========================================================== update module
public function updatemodule(Request $request){
   $nom = $request->input('nom');
    $nom_module = $request->input('nom_module');
   $num_element = $request->input('num_element');
   DB::table('modules')
       ->where('nom_module', $nom)
       ->update(array('nom_module' => $nom_module,'num_element'=>$num_element )); 
       DB::table('elements')
       ->where('nom_mod', $nom)
       ->update(array('nom_mod'=> $nom_module));
       return redirect('update/update-module');
} 
//========================================================== update element
public function updateelement(Request $request){
   $id = $request->input('id_element');
    $nom_element = $request->input('nom_element');
    $horaire_element = $request->input('horaire_element');
   DB::table('elements')
       ->where('id_element', $id)
       ->update(array('nom_element' => $nom_element,'horaire_element'=>$horaire_element )); 
       return redirect('update/update-element');
} 
 //========================================================== update deplome
 public function updatedeplome(Request $request){
   $id = $request->input('id_deplome');
    $nom_deplome = $request->input('nom_deplome');
   $type_deplome = $request->input('type_deplome');
   $duree_deplome = $request->input('duree_deplome');
   DB::table('deplomes')
       ->where('id_deplome', $id)
       ->update(array('nom_deplome' => $nom_deplome,'type_deplome'=>$type_deplome,'duree_deplome'=>$duree_deplome )); 
      /*  DB::table('deplomes')
       ->where('id_deplome', $id)
       ->delete(); */
       return redirect('update/update-deplome');
} 
//========================================================== update deplome
public function updatesemestre(Request $request){
   $nom = $request->input('nom_sold');
    $nom_snew = $request->input('nom_snew');
   $nom_fil = $request->input('nom_fil');
   $nom_etabless = $request->input('nom_etabless');
   DB::table('semstrs')
       ->where('nom_s', $nom)
       ->update(array('nom_s' => $nom_snew,'nom_file'=>$nom_fil,'nom_etabless'=>$nom_etabless )); 
       DB::table('modules')
       ->where('nom_se', $nom)
       ->update(array('nom_se' => $nom_snew)); 
       return redirect('update/update-semestre');
} 

 //==========================================================
 public function deleteshowNometab(){
   $etap = Etaplissemment::all();
    return view('/delete/delete-etablessement',compact('etap'));
 }
  //==========================================================
 public function  deleteshowNomfil(){
   $file = Feliere::all();
    return view('/delete/delete-filiere',compact('file'));
 }
  //==========================================================
 public function  deleteshowNommod(){
   $mod = Module::all();
    return view('/delete/delete-module',compact('mod'));
 }
  //==========================================================
 public function   deleteshowNomelem(){
   $elem = Element::all();
    return view('/delete/delete-element',compact('elem'));
 }
  //==========================================================
 public function   deleteshowNomdep(){
   $dep = Deplome::all();
    return view('/delete/delete-deplome',compact('dep'));
 }
//==========================================================
   public function   deleteshowNomsem(){
      $semestre = Semstr::all();
       return view('/delete/delete-semestre',compact('semestre'));
    }
 //========================================================== delete etablessement
 public function  deleteetab(Request $request){
   $nom = $request->input('nom');
   DB::table('etaplissemments')
       ->where('nom_etablessement', $nom)
       ->delete();
       DB::table('deplomes')
       ->where('nom_etap', $nom)
       ->delete(); 
       DB::table('felieres')
       ->where('nom_etabless', $nom)
       ->delete();
       DB::table('modules')
       ->where('nom_etabless', $nom)
       ->delete();
       DB::table('elements')
       ->where('nom_etabless', $nom)
       ->delete();
       DB::table('semstrs')
       ->where('nom_etabless', $nom)
       ->delete();
return redirect('delete/delete-etablessement');
} 
 //========================================================== de
public function  deletefiliere(Request $request){
   $id = $request->input('id_filiere');
   DB::table('felieres')
       ->where('id_filiere', $id)
       ->delete();
return redirect('delete/delete-filiere');
} 
 //==========================================================
public function  deletemodule(Request $request){
   $id = $request->input('id_module');
   DB::table('modules')
       ->where('id_module', $id)
       ->delete();
return redirect('delete/delete-module');
} 
 //==========================================================
public function deleteelement(Request $request){
   $id = $request->input('id_element');
   DB::table('elements')
       ->where('id_element', $id)
       ->delete();
return redirect('delete/delete-element');
} 
 //==========================================================
public function deletedeplome(Request $request){
   $id = $request->input('nom_deplome');
   DB::table('deplomes')
       ->where('nom_deplome', $id)
       ->delete();
return redirect('delete/delete-deplome');
} 
 //==========================================================
 public function deletesemestre(Request $request){
   $nom = $request->input('nom_s');
   DB::table('semstrs')
       ->where('nom_s', $nom)
       ->delete();
return redirect('delete/delete-semestre');
} 
 //==========================================================












}
