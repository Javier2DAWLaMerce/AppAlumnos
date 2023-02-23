<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Post::truncate();//Elimina todo antes de ponerlo
        
        for ($i=0; $i < 50; $i++) { //Es una manera de crear bases random para probar
            
            $post = new Post();
            $post->titol = "titulo" . $i;
            $post->contingut = "contenido random" . $i;
            $post->save();
        }
        //
    }
}
