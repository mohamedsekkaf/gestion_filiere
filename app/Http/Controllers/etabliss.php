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
   $tes= DB::select("select * from etaplissemments where id_etablessement = ?",[$id]);
   $fil =  DB::select("select * from felieres where id_etabless= ?",[$tes[0]->id_etablessement]);
   return  view('filiere', compact('fil','tes'));
}
//==========================================================
public function modul($id)
{
   $mode = DB::select("select * from felieres where id_filiere= ?",[$id]);
   $module =  DB::select("select * from modules where id_fil = ?",[$mode[0]->id_filiere]);
   return  view('module', compact('module','mode'));
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
