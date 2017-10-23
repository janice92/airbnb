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
                "image"      => "photo1",
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "user_id"          => "3",
                "title"         => "cherche colocataire Courbevoie",
                 "body"         => "Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo;

                  .",

                "categorie_id"         => "1",
                "image"      => "photo2",
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
                "image"      => "photo3",
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ];

        DB::table('annonces')->insert($annonces);
    }
}
