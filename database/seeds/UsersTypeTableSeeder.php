<?php

use Illuminate\Database\Seeder;

class UsersTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_types')->insert([
            [
            'name' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            ],
            [
            'name' => 'client',
            'created_at' => date('Y-m-d H:i:s'),
            ],
            [
            'name' => 'technician',
            'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
