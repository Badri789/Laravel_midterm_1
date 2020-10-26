<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("employees")->insert([
           'name' => Str::random(10),
           'surname' => Str::random(10),
           'position' => Str::random(10),
           'phone' => Str::random(10),
           'is_hired' => rand(0,1) == 1
       ]);
    }
}
