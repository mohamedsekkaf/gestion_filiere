<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Etaplissemment;
class etabliss extends Controller
{
public function showetabliss(){
    $etap = Etaplissemment::all();
    return view('home', compact('etap'));
}

public function info($id)
{
   $tes= DB::select("select * from etaplissemments where etapl_id = ?",[$id]);
   $fil =  DB::select("select * from felieres where fel_id = ?",[$tes[0]->fil_id]);

   
   return  view('filiere', compact('fil'));
}








}
