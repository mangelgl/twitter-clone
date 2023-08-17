<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Método que devuelve posts para entornos de prueba
     * 
     * @return redirect se devuelven los posts
     */
    public function getPosts() {
        $posts = [
            [
                'id' => 001,
                'user-name' => 'Miguel Ángel García',
                'content' => 'Hola Mundo desde el controlador',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 002,
                'user-name' => 'Miguel Ángel García',
                'content' => 'A veces suelo salir a hacer running por las tardes :)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 003,
                'user-name' => 'Miguel Ángel García',
                'content' => 'En Octubre estaré en Madrid corriendo la Spartan Race, toca prepararse y entrenar duro',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 004,
                'user-name' => 'Miguel Ángel García',
                'content' => '¿Sabes donde está Jericho?',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 005,
                'user-name' => 'Miguel Ángel García',
                'content' => 'Soy del Sevilla FC hasta la muerte.',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        return view('home')
        ->with('posts', $posts);
    }
}
