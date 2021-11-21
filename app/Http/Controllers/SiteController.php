<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        //o laravel procura por resources/views/home.blade.php
        return view('home');
    }

    public function pagina()
    {
        return 'Minha página';
    }

    public function ola($nome_cliente, $sobrenome_cliente)
    {
        //$lista = [
            //'links1',
           // 'links2'
      //  ];
        //chamada da view "ola"
        //injetou na view 2 valores: nome e sobrenome
        //usando array associativo
        return view('ola', [
            'nome' => $nome_cliente,
            'sobrenome' => $sobrenome_cliente,
        ]);
    }

    public function contato()
    {
        return 'Contato aqui';
    }

}


