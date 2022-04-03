<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

use App\Models\User;

use App\Models\RegisterStudent;

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

        $teacher = User::where('id', $program->user_id)->first()->toArray();

        return view('programs.show', ['program'=>$program, 'teacher'=>$teacher]);
    }

    public function dashboard() {

        $user = auth()->user();
           
        $programs = $user->programs;

        return view('programs.dashboard', ['programs' => $programs]);
    }

    public function destroy($id) {

        Program::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Programa Marcial deletado com sucesso!');
    }

    public function edit($id) {

        $program = Program::findOrFail($id);

        return view('programs.edit', ['program' => $program]);
    }

    public function update(Request $request) {

        $data = $request->all();
        
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/programs'), $imageName);

            $data['image'] = $imageName;

        }
        
        Program::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Programa Marcial editado com sucesso!');
    }

    public function signup($id) {

        $user = auth()->user();

        $user->programsStudents()->attach($id);

        $program = Program::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Você se inscreveu no programa: ' . $program->name);
    }

    public function registerStudent() {

        return view('register'); 
    }

    public function signupStudent(Request $request) {

        $request->validate([

            'firstName' => 'required|max:255',
            'lastName' => 'required|email|max:255',
            'fone' => 'required|numeric',
            'address' => 'required|max:255',
            'zip' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'email' => 'required|email|max:255',
            'sex' => 'required|max:255',
            'birthDate' => 'required|date|numeric'

        ]);

        $register_student = new RegisterStudent;

        $register_student->firstName = $request->firstName;
        $register_student->lastName = $request->lastName;
        $register_student->fone = $request->fone;
        $register_student->address = $request->address;
        $register_student->zip = $request->zip;
        $register_student->city = $request->city;
        $register_student->state = $request->state;
        $register_student->country = $request->country;
        $register_student->email = $request->email;
        $register_student->sex = $request->sex;
        $register_student->birthDate = $request->birthDate;

        
        
        

        $register_student->save();

        return redirect('home')->with('msg', 'Aluno cadastrado com sucesso!');
    }   

}

