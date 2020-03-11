<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**z
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function comment(Request $request){
        $request->validate([
           "nom"       => "required",
           "email"     => "required",
           "comment"   => "required"
        ]);
        $nom = $request->input('nom');
        $email = $request->input('email');
        $comment = $request->input('comment');
        $data=array('nom'=>$nom,'email'=>$email,'comment'=>$comment,'date'=>"mabrouk" ,'test1'=>"mabrouk" ,'test2'=>"mabrouk" ,'test3'=>"mabrouk" );
        DB::table('comment')->insert($data);
        return redirect('home');
      }

   
}
