<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin123@example.com',
            'gender'=>'f',
            'address' =>'chavakachcheri',
            'mobile'=>'0213456783',
            'password'=>Hash::make('1234'),
            'role'=>'admin'  
         ]);
    }
}
?>