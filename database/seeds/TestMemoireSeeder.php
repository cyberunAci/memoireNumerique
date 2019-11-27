<?php

use Illuminate\Database\Seeder;

class TestMemoireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                // TODO
                'titre' => 'TEST de memoire 1',
                'resumer' => 'TEST de memoire 1',
                'description' => 'TEST de memoire 1',
                'auteur' => 'TEST de memoire 1',
                'id_categorie' => '1',
                'status' => '1',
                'id_status' => '1',
                'id_media' => '1',
            ],
            [
                'titre' => 'TEST de memoire 2',
                'resumer' => 'TEST de memoire 2',
                'description' => 'TEST de memoire 2',
                'auteur' => 'TEST de memoire 2',
                'id_categorie' => '2',
                'status' => '2',
                'id_status' => '2',
                'id_media' => '2',
            ],
            [
                'titre' => 'TEST de memoire 3',
                'resumer' => 'TEST de memoire 3',
                'description' => 'TEST de memoire 3',
                'auteur' => 'TEST de memoire 3',
                'id_categorie' => '3',
                'status' => '3',
                'id_status' => '3',
                'id_media' => '3',
            ],
        ];
        DB::table('memoire')->insert(
            $array
        );
    }
}
