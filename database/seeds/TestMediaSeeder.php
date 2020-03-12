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
                'video' => 'TEST de video',
                'image' => 'TEST de video',
                'id_type' => '1',
            ],
            [
                'video' => 'TEST d\'article',
                'image' => 'TEST d\'article',
                'id_type' => '2',
            ],
            [
                'video' => 'TEST d\'image',
                'image' => 'TEST d\'image',
                'id_type' => '3',
            ],
        ];
        DB::table('media')->insert(
            $array
        );
    }
}
