<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hicham;

class HichamController extends Controller
{
    public function viewHicham(){
    $hicham = Hicham::all();
    $arr=Array('hicham'=>$hicham);
   	return view('hicham.view',$arr);
   }
}