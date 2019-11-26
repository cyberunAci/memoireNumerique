<?php

use Illuminate\Database\Seeder;

class TestMediaSeeder extends Seeder
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
                'titre' => 'TEST de memoire',
                'resumer' => 'TEST de memoire',
                'description' => 'TEST de memoire',
                'auteur' => 'TEST de memoire',
                'id_categorie' => '1',
                'status' => '1',
                'id_status' => '1',
                'id_media' => '1',
            ],
        ];
        DB::table('memoire')->insert(
            $array
        );
    }
}
