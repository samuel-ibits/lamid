<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class plans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('plans')->insert([
            
            'price'=> Str::random(5),
            'image'=> Str::random(5),
            'description'=> Str::random(5),
            'discount'=> Str::random(5),
            'file'=> Str::random(5),
            'status'=> Str::random(5),
            'name' => Str::random(5),
            
             ]);
    }
}
