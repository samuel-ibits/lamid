<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            
            'price'=> Str::random(5),
            'image'=> Str::random(5),
            'description'=> Str::random(5),
            'discount'=> Str::random(5),
            'file'=> Str::random(5),
            'status'=> Str::random(5),
            'name' => Str::random(5),
            
             ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
