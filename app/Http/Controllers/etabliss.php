<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Etaplissemment;
use App\Feliere;
use App\Module;
class etabliss extends Controller
{
//==========
public function showetabliss(){
    $etap = Etaplissemment::all();
    
    return  view('home',compact('etap'));
}

//==========================================================
public function showinfo(){
    $etab = Etaplissemment::all();
    $file = Feliere::all();
    $mod = Module::all();
    return  view('ajouter',compact('etab','file','mod'));
}
//==========================================================
public function info($id)
{
   $tes= DB::select("select * from etaplissemments where etapl_id = ?",[$id]);
   $fil =  DB::select("select * from felieres where fel_id = ?",[$tes[0]->fil_id]);
   return  view('filiere', compact('fil'));
}
//==========================================================

public function insertetap(){
    $etablis = new Etaplissemment;

    $etablis->nom_etablessement      = request("nom_etablissement");
    $etablis->local_etablessement    = request("local_etablissement");
    $etablis->save();
    return view('/ajouter');
}





}
