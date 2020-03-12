<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\validator ;
use Illuminate\Http\Request;
/* use Illuminate\Pagination\Paginator; */
use App\Http\Requests;
use PDF;
use DB;
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
use App\Comment;
use App\User;
use Response;
class etabliss extends Controller
{

public function pdfcontent($fil){
   $s = DB::select("select * from felieres where nom_filiere = ? ",[$fil]);
   $sem =  DB::select("select * from semstrs where nom_file = ?",[$s[0]->nom_filiere]);
   $mod =  DB::select("select * from modules where nom_fil = ?",[$s[0]->nom_filiere]);
   $elem =  DB::select("select * from elements where nom_fil = ?",[$s[0]->nom_filiere]);
   PDF::loadView("pdf",compact('sem','mod','elem'))->setPaper('a4', 'landscape')->save(public_path()."/pdfs/Telecharger.pdf")->stream("aslan".".pdf");
   $file= public_path(). "/pdfs/Telecharger.pdf";
      $headers = array(
                'Content-Type: application/pdf',
              );
      return Response::download($file, 'Telecharger.pdf', $headers);
}

  public function export_pdf(){
      
  }
//==========
public function showetabliss(){
    $etap = Etaplissemment::paginate(4);
    $comment = Comment::paginate(5);
    return  view('home',compact('etap','comment'));
}
//========================================================== selection deplome
public function showdeplome($id){
   $tes= DB::select("select * from etaplissemments where nom_etablessement = ?",[$id]);
   $dep =  DB::select("select * from deplomes where nom_etap= ?",[$tes[0]->nom_etablessement]);
   return  view('deplome',compact('dep'));
}
//==========================================================
public function showinfo(){
    $etab = Etaplissemment::all();
    $file = Feliere::all();
    $mod = Module::all();
    $semestre = semstr::all();
    $elem = Element::all();
    $comment = Comment::all();
    $users   = User::all();
    return  view('ajouter',compact('etab','file','mod','semestre','elem','comment','users'));
}
//========================================================== selection filiere
public function info($id)
{
   $tes= DB::select("select * from etaplissemments where nom_etablessement = ?",[$id]);
   $fil =  DB::select("select * from felieres where nom_etabless =?",[$tes[0]->nom_etablessement]);
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
  /*  $s = DB::select("select * from felieres where nom_filiere = ? ",[$nom]); */
   $sem =  DB::select("select * from semstrs where nom_file = ?",/* [$s[0]->nom_filiere] */[$nom]);
   $mod =  DB::select("select * from modules where nom_fil = ?",/* [$s[0]->nom_filiere] */[$nom]);
   $elem =  DB::select("select * from elements where nom_fil = ?",/* [$s[0]->nom_filiere] */[$nom]);
   return  view('semestre', compact('sem','mod','elem'));
}
//===========================================
public function Sformajouteretab(){
   return view('ajouter/ajouter-etablessement');
}
//===========================================
public function Sformajouterfil(){
   $etab = Etaplissemment::all();
   return view('ajouter/ajouter-filiere',compact('etab'));
}
//===========================================
public function Sformajoutersem(){
   $etab = Etaplissemment::all();
   $file = Feliere::all();
   $semestre = semstr::all();
   return view('ajouter/ajouter-semestre',compact('etab','file','semestre'));
}
//===========================================
public function Sformajoutermod(){
   $etab = Etaplissemment::all();
   $etab = Etaplissemment::all();
    $file = Feliere::all();
    $mod = Module::all();
    $semestre = semstr::all();
   return view('ajouter/ajouter-module',compact('etab','file','semestre'));
}
//===========================================
public function Sformajouterelem(){
   $etab = Etaplissemment::all();
   $mod = Module::all();
   $semestre = semstr::all();
   $file = Feliere::all();
   return view('ajouter/ajouter-element',compact('etab','mod','semestre','file'));
}
//===========================================
public function Sformajouterdep(){
   $etab = Etaplissemment::all();
   return view('ajouter/ajouter-deplome',compact('etab'));
}
//========================================================== ajouter etablessement
public function insertetab(Request $request){
$request->validate([
   "nom_etablessement"   => "required|unique:etaplissemments|max:255",
   "local_etablessement" => "required|max:255",
   "image"              => "required|max:255",
],
[
   "nom_etablessement.required" => "Le champ de l'établissement est obligatoire",
   "nom_etablessement.unique"   => "le nom de l'établissement est déja utilisé", 
    "local_etablessement.required" => "Le champ de local est obligatoire", 
    "image.required" => "Le champ d'image est obligatoire"
]
);
 $nom_etablessement = $request->input('nom_etablessement');
$local_etablessement = $request->input('local_etablessement');
if ($request->has('image')) {
   $files = $request->file('image');
 // Define upload path
  $destinationPath = public_path('/images/'); // upload path
// Upload Orginal Image           
  $profileImage =$nom_etablessement. '.' . $files->getClientOriginalExtension();
  $request->file('image')->move($destinationPath, $profileImage);
  
$data=array('nom_etablessement'=>$nom_etablessement,'local_etablessement'=>$local_etablessement,'image' => $profileImage);
DB::table('etaplissemments')->insert($data);
return redirect('ajouter/ajouter-etablessement');

   }
}
//========================================================== ajouter filiere
public function insertetabfil(Request $request){
$request->validate([
      "nom_filiere" => "required|unique:felieres",
      "nummodel"    => "required",
      "nom_etabless"=> "required",
],
[
   "nom_filiere.required"  => "Le champ de Filière est obligatoire",
   "nom_filiere.unique"  => "Le nom de filière est déja utilisé",
   "nummodel.required"  => "Le champ de nombre de module est obligatoire",
   "nom_etabless.required"  => "Le champ  de l'établissement est obligatoire",
]
);
 $nom_filiere = $request->input('nom_filiere');
$nummodel = $request->input('nummodel');
$nom_etabless = $request->input('nom_etabless');
$nom_se = $request->input('nom_se');
$data=array('nom_filiere'=>$nom_filiere,'nummodel'=>$nummodel,'nom_etabless'=>$nom_etabless);
DB::table('felieres')->insert($data);
//echo "<script>Swal.fire('Les donnés ont été enregistrées !')</script>";
return redirect('ajouter/ajouter-filiere');

}
//========================================================== ajouter semester
public function insertetabsemestre(Request $request){
$request->validate([
      "nom_s"        =>"required|unique:semstrs",
      "nom_file"      =>"required",
      "nom_etabless" =>"required",
],
[
   "nom_s.required"  =>"Le champ de Semestre est obligatoire.",
   "nom_s.unique"  => "le nom de semestre est déja utilisé",
   "nom_s.unique"   => "Le nom Semestre est déja utilisé",
   "nom_file.required"   =>"Le champ de filière est obligatoire.",
   "nom_etabless.required" =>"Le champ de l'établissement est obligatoire.",
]
);
   $nom_s = $request->input('nom_s');
  $nom_file = $request->input('nom_file');
  $nom_etabless = $request->input('nom_etabless');
  $data=array('nom_s'=>$nom_s." ".$nom_file,'nom_file'=>$nom_file,'nom_etabless'=>$nom_etabless);
  DB::table('semstrs')->insert($data);
  return redirect('ajouter/ajouter-semestre');
  
  }
//========================================================== ajouter module
public function insertetabmod(Request $request){
   $request->validate([
      "nom_module"      =>"required|unique:modules",
      "num_element"      =>"required",
      "nom_fil"         =>"required",
      "nom_etabless"     =>"required",
      "nom_se"          =>"required",
   ],
[
   "nom_module.required"      =>"Le champ de module est obligatoire.",
   "nom_module.unique"      =>"Le nom de  module est déja utilisé. ",
      "num_element.required"      =>"Le champ de nombre element est obligatoire.",
      "nom_fil.required"         =>"Le champ de Filiere est obligatoire.",
      "nom_etabless.required"     =>"Le champ de l'établissement est obligatoire.",
      "nom_se.required"          =>"Le champ de Semestre est obligatoire.",
]
);
    $nom_module = $request->input('nom_module');
   $num_element = $request->input('num_element');
   $nom_fil = $request->input('nom_fil');
   $nom_etabless = $request->input('nom_etabless');
   $nom_se = $request->input('nom_se');
   $data=array('nom_module'=>$nom_module,'num_element'=>$num_element,'nom_fil'=>$nom_fil,'nom_etabless'=>$nom_etabless,'nom_se'=>$nom_se);
   DB::table('modules')->insert($data);
  
   return redirect('ajouter/ajouter-module');
   }
//========================================================== ajouter element 
public function insertetabelem(Request $request){
   $request->validate([
      "nom_element" =>"required|unique:elements",
      "nom_mod" =>"required",
      "nom_etabless" =>"required",
      "horaire_element" =>"required",
      "nom_sem"          =>"required",
      "nom_fil"  =>  "required",
   ],
[
   "nom_element.required" =>"Le champ d'Element est obligatoire.",
   "nom_element.unique" =>"Le nom d'Element est féja utilisé.",
      "nom_mod.required" =>"Le champ de module est obligtoire. ",
      "nom_etabless.required" =>"Le champ de l'ètablissement est obligatoire. ",
      "horaire_element.required" =>"Le champ de horaire est obligatoire",
      "nom_sem.required" =>"Le champ de semestre est obligatoire",
      "nom_fil.required" =>"Le champ de Element est obligatoire",

]
);
    $nom_element = $request->input('nom_element');
   $nom_mod = $request->input('nom_mod');
   $nom_etabless = $request->input('nom_etabless');
   $horaire_element = $request->input('horaire_element');
   $nom_sem = $request->input('nom_sem');
   $nom_fil = $request->input('nom_fil');
   $data=array('nom_element'=>$nom_element,'nom_mod'=>$nom_mod,'nom_etabless'=>$nom_etabless,'horaire_element'=>$horaire_element,'nom_sem'=>$nom_sem,'nom_fil'=>$nom_fil );
   DB::table('elements')->insert($data);
   /* $message="les données a ete inserer"; */
  // echo "<script type='text/javascript'>alert('$message');</script>";
   return redirect('ajouter/ajouter-element');
   }
//========================================================== ajouter deplome
   public function insertetabdeplome(Request $request){
      $request->validate([
         "nom_deplome" =>"required|unique:deplomes",
         "type_deplome" =>"required",
         "duree_deplome" =>"required",
         "nom_etap" =>"required",
      ]);
      $nom_deplome = $request->input('nom_deplome');
     $type_deplome = $request->input('type_deplome');
     $duree_deplome = $request->input('duree_deplome');
     $nom_etap = $request->input('nom_etap');
     $data=array('nom_deplome'=>$nom_deplome,'type_deplome'=>$type_deplome,'duree_deplome'=>$duree_deplome,'nom_etap'=>$nom_etap );
     DB::table('deplomes')->insert($data);
     return redirect('ajouter/ajouter-deplome');
     }
//========================================================== show info

public function showNometab(){
   $etap = Etaplissemment::all();
   return view('update/update-etablessement',compact('etap'));
} 
public function showNomfil(){
   $file = Feliere::all();
   $etap = Etaplissemment::all();
   return view('update/update-filiere',compact('file','etap'));
} 
public function showNommod(){
   $mod = Module::all();
   $file = Feliere::all();
   $etap = Etaplissemment::all();
   $semestre = semstr::all();
   return view('update/update-module',compact('mod','etap','file','semestre'));
} 
public function showNomelem(){
   $elem = Element::all();
   $mod = Module::all();
   $file = Feliere::all();
   $etap = Etaplissemment::all();
   $semestre = semstr::all();
   return view('update/update-element',compact('elem','mod','etap','file','semestre'));
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
   if ($request->has('images')) {
      $files = $request->file('images');
    // Define upload path
     $destinationPath = public_path('/images/'); // upload path
   // Upload Orginal Image           
     $profileImage =$nom_etablessement. '.' . $files->getClientOriginalExtension();
     $request->file('images')->move($destinationPath, $profileImage);


   DB::table('etaplissemments')
       ->where('nom_etablessement', $nom)
       ->update(array('nom_etablessement' => $nom_etablessement,'local_etablessement'=>$local_etablessement,'image' => $profileImage));
       DB::table('felieres')
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
} }
//========================================================== update filiere
 public function updatefiliere(Request $request){
    $nom = $request->input('nom');
    $nom_filiere = $request->input('nom_filiere');
   $nummodel = $request->input('nummodel');
   DB::table('felieres')
       ->where('nom_filiere', $nom)
       ->update(array('nom_filiere' => $nom_filiere,'nummodel'=>$nummodel  )); 
       DB::table('modules')
       ->where('nom_fil', $nom)
       ->update(array('nom_fil'=> $nom_filiere));
       DB::table('semstrs')
       ->where('nom_file', $nom)
       ->update(array('nom_file'=>$nom_filiere ));
       DB::table('elements')
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
//========================================================== update semestre
public function updatesemestre(Request $request){
   $nom = $request->input('nom_sold');
    $nom_snew = $request->input('nom_snew');
   $nom_fil = $request->input('nom_fil');
   $nom_etabless = $request->input('nom_etabless');
   DB::table('semstrs')
       ->where('nom_s', $nom)
       ->update(array('nom_s' => $nom_snew .' '.$nom_fil,'nom_file'=>$nom_fil,'nom_etabless'=>$nom_etabless )); 
       DB::table('modules')
       ->where('nom_se', $nom)
       ->update(array('nom_se' => $nom_snew.' '.$nom_fil)); 
       DB::table('elements')
       ->where('id_element', $nom)
       ->update(array('nom_sem' => $nom_snew.' '.$nom_fil)); 
       return redirect('update/update-semestre');
} 

 //==========================================================
 public function deleteshowNometab(){
   $etap = Etaplissemment::all();
    return view('/delete/delete-etablessement',compact('etap'));
 }
  //==========================================================
 public function  deleteshowNomfil(){
   $etap = Etaplissemment::all();
   $file = Feliere::all();
   $semestre = Semstr::all();
   $mod = Module::all();
   $elem = Element::all();
    return view('/delete/delete-filiere',compact('elem','mod','etap','file','semestre'));
 }
  //==========================================================
 public function  deleteshowNommod(){
   $etap = Etaplissemment::all();
   $file = Feliere::all();
   $semestre = Semstr::all();
   $mod = Module::all();
   $elem = Element::all();
    return view('/delete/delete-module',compact('elem','mod','etap','file','semestre'));
 }
  //==========================================================
 public function   deleteshowNomelem(){
   $etap = Etaplissemment::all();
   $file = Feliere::all();
   $semestre = Semstr::all();
   $mod = Module::all();
   $elem = Element::all();
    return view('/delete/delete-element',compact('elem','mod','etap','file','semestre'));
 }
  //==========================================================
 public function   deleteshowNomdep(){
   $dep = Deplome::all();
    return view('/delete/delete-deplome',compact('dep'));
 }
//==========================================================
   public function   deleteshowNomsem(){
      $etap = Etaplissemment::all();
      $file = Feliere::all();
      $semestre = Semstr::all();
      $mod = Module::all();
      $elem = Element::all();
       return view('/delete/delete-semestre',compact('elem','mod','etap','file','semestre'));
    }
 //========================================================== delete etablessement hhhhhhh
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
       ->where('nom_filiere', $id)
       ->delete();
       DB::table('modules')
       ->where('nom_fil', $id)
       ->delete();
       DB::table('elements')
       ->where('nom_fil', $id)
       ->delete();
       DB::table('semstrs')
       ->where('nom_file', $id)
       ->delete();
return redirect('delete/delete-filiere');
} 
 //==========================================================
public function  deletemodule(Request $request){
   $id = $request->input('nom_module');
   DB::table('modules')
       ->where('nom_module', $id)
       ->delete();
       DB::table('elements')
       ->where('nom_mod', $id)
       ->delete();
return redirect('delete/delete-module');
} 
 //==========================================================
public function deleteelement(Request $request){
   $id = $request->input('id_element');
   DB::table('elements')
       ->where('nom_element', $id)
       ->delete();
return redirect('delete/delete-element');
} 
 //==========================================================
public function deletedeplome(Request $request){
   $nom = $request->input('nom_deplome');
   DB::table('deplomes')
       ->where('nom_deplome', $nom)
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
 //========================================================== commentaire 
  public function comment(Request $request){
   $request->validate([
      "nom"       => "required",
      "email"     => "required|email",
      "comment"   => "required"
   ]);
   $nom = $request->input('nom');
   $email = $request->input('email');
   $comment = $request->input('comment');
   $data=array('nom'=>$nom,'email'=>$email,'comment'=>$comment,'date'=>"mabrouk" ,'test1'=>"mabrouk" ,'test2'=>"mabrouk" ,'test3'=>"mabrouk" );
   DB::table('comment')->insert($data);
   return redirect('/');
 } 

 
//000000000===================================0000000000 delete comment
public function deletecomment(Request $request){
   $nom = $request->input('nom');
   DB::table('comment')
       ->where('comment', $nom)
       ->delete();
return redirect('ajouter');
}
//000000000===================================0000000000 delete user
public function deleteuser(Request $request){
   $name = $request->input('name');
   DB::table('users')
       ->where('name', $name)
       ->delete();
return redirect('ajouter');
}

}
