<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumne;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {//Con el databaseSeeder llamamos a los seeders que vamos creando
        
        //Post::truncate();
        //User::truncate();
        Alumne::truncate();
        //$this->call(PostSeeder::class); //Aqui indicamos que llame al seeder PostSeeder y lo ejecute
        //Post::factory(10)->create();
        //User::factory(10)->create();
        Alumne::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
