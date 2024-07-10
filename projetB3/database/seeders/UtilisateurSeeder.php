<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            [
                'nom' => 'Eh',
                'prenom' => 'Paulette',
                'email' => 'epaulette@gmail.com',
                'mot_de_passe' => bcrypt('secret'),
                'pseudonyme' => 'Epaulette',
                'photo_de_profil' => null,
                'pays' => 'France',
                'date_de_naissance' => '1990-01-01',
                'reseaux_sociaux' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Ajoutez d'autres utilisateurs si nécessaire
        ]);
    }
}
