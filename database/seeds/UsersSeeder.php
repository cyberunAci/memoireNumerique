<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin.admin@gmail.com',
                'password' => md5('admin')
            ]
        ];
        DB::table('users')->insert(
            $array
        );
    }
}
