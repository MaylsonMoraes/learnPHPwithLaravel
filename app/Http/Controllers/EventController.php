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

        //image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/programs'), $imageName);

            $program->image = $imageName;

        }

        $program->save();

        return redirect('/')->with('msg', 'Programa Marcial criado com sucesso!');
        
    }

    public function show($id) {
        
        $program = Program::findOrFail($id);

        return view('programs.show', ['program'=>$program]);
    }
}

