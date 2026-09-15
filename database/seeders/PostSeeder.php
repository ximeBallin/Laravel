<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'title' => "Post de prueba $i",
                'slug' => "post-de-prueba-$i",
                'content' => "Contenido completo del post de prueba número $i para la práctica del curso.",
                'category_id' => 1, // O asigna una categoría existente de forma dinámica
            ]);
        }
    }
}
