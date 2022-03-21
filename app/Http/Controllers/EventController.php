<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Maylson";
        $idade = 33;

        $arr = [10, 20, 30, 40, 50];

        $nomes = ["Maylson", "Maria", "joão", "Josefa"];

        return view('home',
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes

        ]);
    }

    public function create(){
        return view('martialProgram.createMartialProgram');
    }
}
