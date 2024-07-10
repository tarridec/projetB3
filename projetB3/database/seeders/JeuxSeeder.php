<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'titre' => 'Spyro',
                'description' => 'Blblblblblblblbl blblb lblblb blbl blblblblblblbllb blbblblb',
                'genre' => 'Platformer',
                'prix' => '39.99',
                'photo_de_profil' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Ajoutez d'autres produits si nécessaire
        ]);
    }
}
