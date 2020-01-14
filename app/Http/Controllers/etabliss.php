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
   $dep =  DB::select("select * from deplomes where id_etap= ?",[$tes[0]->id_etablessement]);
   return  view('deplome',compact('dep'));
}

//==========================================================
public function showinfo(){
    $etab = Etaplissemment::all();
    $file = Feliere::all();
    $mod = Module::all();
    return  view('ajouter',compact('etab','file','mod','dep'));
}
//========================================================== selection filiere
public function info($id)
{
   $tes= DB::select("select * from etaplissemments where id_etablessement = ?",[$id]);
   $fil =  DB::select("select * from felieres where id_etabless= ?",[$tes[0]->id_etablessement]);
   return  view('filiere', compact('fil'));
}
//========================================================== selection module
public function modul($nom)
{
   $mode = DB::select("select * from felieres where nom_filiere= ?",[$nom]);
   $module =  DB::select("select * from modules where nom_fil = ?",[$mode[0]->nom_filiere]);
   return  view('module', compact('module'));
}
//========================================================== selection element
public function element($nom)
{
   $elem = DB::select("select * from modules where nom_module= ?",[$nom]);
   $element =  DB::select("select * from elements where nom_mod = ?",[$elem[0]->nom_module]);
   return  view('element', compact('element'));
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
  $profileImage =time() . '.' . $files->getClientOriginalExtension();
  $request->file('images')->move($destinationPath, $profileImage);


$data=array('nom_etablessement'=>$nom_etablessement,'local_etablessement'=>$local_etablessement,'image' => $profileImage,'created_at'=>Date("y/m/d") );
DB::table('etaplissemments')->insert($data);
return redirect('ajouter');
/* echo '<h1 align="center">'. 'saved'.'</h1>'; */
   }
}
//========================================================== ajouter filiere
public function insertetabfil(Request $request){
 $nom_filiere = $request->input('nom_filiere');
$nummodel = $request->input('nummodel');
$id_etabless = $request->input('id_etabless');
$data=array('nom_filiere'=>$nom_filiere,'nummodel'=>$nummodel,'id_etabless'=>$id_etabless,'created_at'=>Date("y/m/d"));
DB::table('felieres')->insert($data);
$message="les données a ete inserer";
echo "<script type='text/javascript'>alert('$message');</script>";
return redirect('ajouter');

}
//========================================================== ajouter module
public function insertetabmod(Request $request){
    $nom_module = $request->input('nom_module');
   $num_element = $request->input('num_element');
   $nom_fil = $request->input('nom_fil');
   $data=array('nom_module'=>$nom_module,'num_element'=>$num_element,'nom_fil'=>$nom_fil,'created_at'=>Date("y/m/d"));
   DB::table('modules')->insert($data);
   $message="les données a ete inserer";
   echo "<script type='text/javascript'>alert('$message');</script>";
   return redirect('ajouter');
   }
//========================================================== ajouter element 
public function insertetabelem(Request $request){
    $nom_element = $request->input('nom_element');
   $nom_mod = $request->input('nom_mod');
   $data=array('nom_element'=>$nom_element,'nom_mod'=>$nom_mod,'created_at'=>Date("y/m/d"));
   DB::table('elements')->insert($data);
   $message="les données a ete inserer";
   echo "<script type='text/javascript'>alert('$message');</script>";
   return redirect('ajouter');
   }
//========================================================== ajouter deplome
   public function insertetabdeplome(Request $request){
      $nom_deplome = $request->input('nom_deplome');
     $type_deplome = $request->input('type_deplome');
     $duree_deplome = $request->input('duree_deplome');
     $id_etap = $request->input('id_etap');
     $data=array('nom_deplome'=>$nom_deplome,'type_deplome'=>$type_deplome,'duree_deplome'=>$duree_deplome,'id_etap'=>$id_etap,'created_at'=>Date("y/m/d"));
     DB::table('deplomes')->insert($data);
     $message="les données a ete inserer";
     echo "<script type='text/javascript'>alert('$message');</script>";
     return redirect('ajouter');
     }
//========================================================== show info

public function showNometab(){
   $etap = Etaplissemment::all();
   return view('update-etablessement',compact('etap'));
} 
public function showNomfil(){
   $file = Feliere::all();
   return view('update-filiere',compact('file'));
} 
public function showNommod(){
   $mod = Module::all();
   return view('update-module',compact('mod'));
} 
public function showNomelem(){
   $elem = Element::all();
   return view('update-element',compact('elem'));
} 
public function showNomdep(){
   $dep = Deplome::all();
   return view('update-deplome',compact('dep'));
} 
//========================================================== update etabblessement
public function updateetab(Request $request){
   $id = $request->input('id');
  /*  echo "<script type='text/javascript'>alert('$id');</script>"; */
     $nom_etablessement = $request->input('nom_etablessement');
   $local_etablessement = $request->input('local_etablessement');
   DB::table('etaplissemments')
       ->where('id_etablessement', $id)
       ->update(array('nom_etablessement' => $nom_etablessement,'local_etablessement'=>$local_etablessement,'updated_at'=>Date("y/m/d")));
return redirect('update-etablessement');
} 
//========================================================== update filiere
 public function updatefiliere(Request $request){
   $id = $request->input('id_filiere');
   $nom = $request->input('nom');
    $nom_filiere = $request->input('nom_filiere');
   $nummodel = $request->input('nummodel');
   DB::table('felieres')
       ->where('id_filiere', $id)
       ->update(array('nom_filiere' => $nom_filiere,'nummodel'=>$nummodel,'updated_at'=> Date("y/m/d",time()))); 
       DB::table('modules')
       ->where('nom_fil', $nom)
       ->update(array('nom_fil'=> $nom_filiere));
       
       return redirect('update-filiere');
}  
//========================================================== update module
public function updatemodule(Request $request){
   $id = $request->input('id_module');
   $nom = $request->input('nom');
    $nom_module = $request->input('nom_module');
   $num_element = $request->input('num_element');
   DB::table('modules')
       ->where('id_module', $id)
       ->update(array('nom_module' => $nom_module,'num_element'=>$num_element,'updated_at'=> Date("y/m/d",time()))); 
       DB::table('elements')
       ->where('nom_mod', $nom)
       ->update(array('nom_mod'=> $nom_module));
       return redirect('update-module');
} 
//========================================================== update element
public function updateelement(Request $request){
   $id = $request->input('id_element');
    $nom_element = $request->input('nom_element');
   $nom_mod = $request->input('nom_mod');
   DB::table('elements')
       ->where('id_element', $id)
       ->update(array('nom_element' => $nom_element,'nom_mod'=>$nom_mod,'updated_at'=> Date("y/m/d",time()))); 
       return redirect('update-element');
} 
 //========================================================== update deplome
 public function updatedeplome(Request $request){
   $id = $request->input('id_deplome');
    $nom_deplome = $request->input('nom_deplome');
   $type_deplome = $request->input('type_deplome');
   $duree_deplome = $request->input('duree_deplome');
   DB::table('deplomes')
       ->where('id_deplome', $id)
       ->update(array('nom_deplome' => $nom_deplome,'type_deplome'=>$type_deplome,'duree_deplome'=>$duree_deplome,'updated_at'=> Date("y/m/d",time()))); 
      /*  DB::table('deplomes')
       ->where('id_deplome', $id)
       ->delete(); */
       return redirect('update-deplome');
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
 public function  deleteetab(Request $request){
   $id = $request->input('id');
   DB::table('etaplissemments')
       ->where('id_etablessement', $id)
       ->delete();
       DB::table('deplomes')
       ->where('id_etap', $id)
       ->delete();
       DB::table('felieres')
       ->where('id_etabless', $id)
       ->delete();
return redirect('delete/delete-etablessement');
} 
 //==========================================================
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
   $id = $request->input('id_deplome');
   DB::table('deplomes')
       ->where('id_deplome', $id)
       ->delete();
return redirect('delete/delete-deplome');
} 
 //==========================================================












}
