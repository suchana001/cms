<?php

namespace Database\Seeders;
use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name'=> 'admin',
             'email'=>'admin@gmail.com',
             'password'=>bcrypt('262020'),
             'mobile'=>'01878005537',
             'role'=>'admin'
             
         ]);
    }
}
