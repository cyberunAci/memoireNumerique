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
                'video' => 'TEST de video',
                'image' => 'https://www.youtube.com/yts/img/yt_1200-vflhSIVnY.png',
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
