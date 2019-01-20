<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hicham = Societe::all();
        //$arr=Array('hicham'=>$hicham);
        return view('societe/societe',['hicham'=>$hicham]);
    }
  
    public function create()
    {
        return view('societe/create');
    }

    public function store(Request $request )
    {  
        $s = new Societe();
       $s->nom = $request->input('name');
        $s->email = $request->input('email');
        $s->save();
        return redirect('societe');
    }

    public function edit($id)
    {
        $s=Societe::find($id);
        return view('societe.edit',['s'=>$s]);
    }

    public function update(Request $request ,$id)
    {
        $s=Societe::find($id);
       $s->nom = $request->input('name');
        $s->email = $request->input('email');
        $s->save();
        return redirect('societe');
    }

    public function destroy(Request $request ,$id)
    {

        $s=Societe::find($id);
       
        $s->delete();
        return redirect('societe');
    }

   

 public function contac()
    {
        $ary=Array('id'=>1,'name'=>'hicham zin');
        return view('layouts.contac', $ary);
    }
}
