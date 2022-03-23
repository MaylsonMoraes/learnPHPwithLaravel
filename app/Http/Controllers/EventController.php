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

    public function create() {
        return view('programs.create');
    }

    public function store(Request $request) {
        
        $program = new Program;

        $program->name = $request->name;
        $program->style = $request->style;
        $program->type = $request->type;

        $program->save();

        return redirect('/');
        
    }
}
