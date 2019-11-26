<?php

use Illuminate\Database\Seeder;

class TestMemoiresSeeder extends Seeder
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
                'titre' => 'TEST',
                'resumer' => 'TEST',
                'description' => 'TEST',
                'auteur' => 'TEST',
                'id_categorie' => '1',
                'id_mediatype' => '1',
                'video' => 'test',
                'image' => 'test',
                'status' => true,
            ],
        ];
        DB::table('memoire')->insert(
            $array
        );
    }
}
