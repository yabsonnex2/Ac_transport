<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function index() {

    return ('shop.accueil');

   }

   !
   public function index() {
      // SELECT * FROM articles;
   $article = articles::All();
   dd[$articles];

    return ('shop.article');

   }
}
