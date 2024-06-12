<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matieres')->insert([
            'titre' => 'Mathématiques',
        ]);


        DB::table('matieres')->insert([
            'titre' => 'Physique-Chimie',
        ]);


        DB::table('matieres')->insert([
            'titre' => 'Sciences de la vie et la Terre',
        ]);


        DB::table('matieres')->insert([
            'titre' => 'Philosophie',
        ]);

        
        DB::table('matieres')->insert([
            'titre' => 'Anglais',
        ]);
    }
}






