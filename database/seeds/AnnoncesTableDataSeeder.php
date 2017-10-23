<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AnnoncesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $annonces = [
            [
                "user_id"          => "2",
                "title"         => "cherche colocataire paris",
                 "body"         => "Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo;

                 ibidines praetereo, quarum acerbissimum extat 
                  .",

                "categorie_id"         => "1",
                "image"      => "http://www.regiesaintlouis.com/picture-1920-1831/1830827/144537553859a6db25378ad0.65017092_799.jpg",
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "user_id"          => "3",
                "title"         => "cherche colocataire Courbevoie",
                 "body"         => "Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo;

                  .",

                "categorie_id"         => "1",
                "image"      => "https://i.pinimg.com/originals/b9/f1/d4/b9f1d42d0fb70111c015fd6bdba7e6d6.jpg",
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
               "user_id"          => "4",
                "title"         => "cherche appartement Lyon",
                 "body"         => "Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo;

                 ibidines praetereo, quarum acerbissimum extat indicium
                 .",

                "categorie_id"         => "1",
                "image"      => "http://www.agenceavous.com/wp-content/uploads/2014/05/Agence-Avous-Appartement-Haussmanien-16eme-piece-a-vivre-grand-espace-chic-luxe.jpg",
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ];

        DB::table('annonces')->insert($annonces);
    }
}
