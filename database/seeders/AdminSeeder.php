<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           "username" => "Admin IdPlay",
           "noHP" => "0812345",
           "role" => "admin",
           "alamat" => "Malang",
           "email" => "admin@gmail.com",
           "password" => bcrypt("admin123"),
           "remember_token" => Str::random(60)
        ]);
        DB::table('categories')->insert([
            ["nama" => "Businness"],
            ["nama" => "Design"],
            ["nama" => "Development"],
            ["nama" => "Seo"],
            ["nama" => "Marketing"],
        ]);
    }
}
