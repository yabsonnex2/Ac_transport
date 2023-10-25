<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionController extends Controller
{
   public function we() {

    return view('gestion');

   }

}