<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

class EventController extends Controller
{
    public function index(){

        $search = request('search');
        
        if ($search) {
            $programs = Program::where('name', 'like', "%$search%")
                                ->orWhere('type', 'like', "%$search%")
                                ->get();
        } else {
            $programs = Program::all();
        }

        return view('home',['programs'=> $programs, 'search' => $search]);
    }

    public function create() {
        return view('programs.create');
    }

    public function store(Request $request) {

        $request->validate([

            'name' => 'required|max:255',
            'style' => 'required|max:255',
            'type' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,|max:2048',
            'date' => 'required|date',
            'students' => 'required|numeric'              
        ]);
        
        $program = new Program;

        $program->name = $request->name;
        $program->style = $request->style;
        $program->type = $request->type;
        $program->items = $request->items;
        $program->date = $request->date;
        $program->students = $request->students;

        //image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/programs'), $imageName);

            $program->image = $imageName;

        }

        $user = auth()->user();
        $program->user_id = $user->id;

        $program->save();

        return redirect('/')->with('msg', 'Programa Marcial criado com sucesso!');
        
    }

    public function show($id) {
        
        $program = Program::findOrFail($id);

        return view('programs.show', ['program'=>$program]);
    }
}

