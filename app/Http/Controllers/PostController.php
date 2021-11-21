<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function insert(Request $request)
    {
        //usando o laravel: $request->get('conteudo');
        $post = new Post();

        $post-> titulo = $request->get('titulo');
        $post-> conteudo = $request->get('conteudo');


        if ($post->save()) {
            return 'Post Criado com sucesso!';
        }

        return 'Erro ao criar o post';
    }

    public function read()
    {

    }
}
