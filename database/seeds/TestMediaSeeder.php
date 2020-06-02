<?php

use Illuminate\Database\Seeder;
use App\Media;
class TestMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Media::class, 6)->create();
        $array = [
            [
                // TODO
                'video' => 'https://youtu.be/HmZKgaHa3Fg',
                'image' => 'https://s.ftcdn.net/v2013/pics/all/curated/RKyaEDwp8J7JKeZWQPuOVWvkUjGQfpCx_cover_580.jpg?r=1a0fc22192d0c808b8bb2b9bcfbf4a45b1793687',
                'id_type' => '1',
            ],
            [
                'video' => 'https://youtu.be/HmZKgaHa3Fg',
                'image' => 'https://s.ftcdn.net/v2013/pics/all/curated/RKyaEDwp8J7JKeZWQPuOVWvkUjGQfpCx_cover_580.jpg?r=1a0fc22192d0c808b8bb2b9bcfbf4a45b1793687',
                'id_type' => '2',
            ],
            [
                'video' => 'https://youtu.be/HmZKgaHa3Fg',
                'image' => 'https://s.ftcdn.net/v2013/pics/all/curated/RKyaEDwp8J7JKeZWQPuOVWvkUjGQfpCx_cover_580.jpg?r=1a0fc22192d0c808b8bb2b9bcfbf4a45b1793687',
                'id_type' => '3',
            ],
            
        ];
        DB::table('media')->insert(
            $array
        );

        
    }
}
