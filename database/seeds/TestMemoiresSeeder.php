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
