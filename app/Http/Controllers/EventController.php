<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

class EventController extends Controller
{
    public function index(){
        
        $programs = Program::all();

        return view('home',['programs'=> $programs]);
    }

    public function create(){
        return view('martialprogram.create');
    }
}
