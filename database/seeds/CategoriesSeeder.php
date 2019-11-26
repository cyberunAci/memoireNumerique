<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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
                'nom' => 'Histoire',
                'couleur' => '',
                'image' => '',
            ],
            [
                'nom' => 'Environnement',
                'couleur' => '',
                'image' => '',
            ],
            [
                'nom' => 'Economie',
                'couleur' => '',
                'image' => '',
            ],
            [
                'nom' => 'Social',
                'couleur' => '',
                'image' => '',
            ],
            [
                'nom' => 'Culture',
                'couleur' => '',
                'image' => '',
            ],
        ];
        DB::table('categorie')->insert(
            $array
        );
    }
}
