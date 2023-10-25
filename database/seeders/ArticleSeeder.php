<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article= new \App\Models\Article();
        $article->nom = 'toyota ZTT' ;
        $article->description = 'La toyota ZTT Annee 2000. boite automatique';
        $article->prix = 500;
        $article->photo = 'buga-2.jpg';
        $article->save();


        $article= new \App\Models\Article();
        $article->nom = 'suziki dzire' ;
        $article->description = 'La suziki dzire Annee 2022';
        $article->prix = 5000;
        $article->photo = 'buga2.png';
        $article->save();


        $article= new \App\Models\Article();
        $article->nom = 'BUGATTI' ;
        $article->description = 'La BUGATTI  R239  2020. électrique';
        $article->prix = 50000;
        $article->photo = 'buga-1.png';
        $article->save();

        $article= new \App\Models\Article();
        $article->nom = 'Mercedes' ;
        $article->description = 'La Mercedes  R239  2020. électrique';
        $article->prix = 50000;
        $article->photo = 'buga3.png';
        $article->save();
    }
    
}
