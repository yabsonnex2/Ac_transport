<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
   public function index() {

    return view('voiture');

   }
   public function create() {

      return view('voiture');
  
     }

     public function store(Request $request ) {
      

      return ;
  
     }
}