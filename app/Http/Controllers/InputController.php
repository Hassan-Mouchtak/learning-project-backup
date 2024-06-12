<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Matiere;
use Illuminate\Http\Request;

class InputController extends Controller
{
   

public function index(){
    $matieres = Matiere::All();
    return view('/dashboard.component.courses.nbcours', [
            'matieres' => $matieres,
            // dd($matieres)
    ]);
} 

public function store(Request $request)
{
    $id_matiere =  $request->matiere;
    foreach ($request->input('input_name') as $courseName) {
        Course::create([
            'matiere_id' => $id_matiere,
            'titre_cours' => $courseName,
        ]);
    }
    

    return redirect()->back()->with('success', 'Inputs added successfully!');
}

}
