<?php

use Illuminate\Database\Seeder;

class Memoire_StatusSeeder extends Seeder
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
                'status' => 'Actif',
            ],
            [
                'status' => 'Inactif',
            ],
            [
                'status' => 'En cours',
            ],
        ];
        DB::table('memoire_status')->insert(
            $array
        );
    }
}
