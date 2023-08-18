<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Método que devuelve posts para entornos de prueba
     * 
     * @return redirect se devuelven los posts
     */
    public function getPosts() {
        $post_query = DB::table('post_test')->get()->toArray();
        return view('home', ['posts' => $post_query]);
    }
}
