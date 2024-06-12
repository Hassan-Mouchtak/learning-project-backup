<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursController extends Controller
{
    public function etudiant(Request $request){
        $matiere_courses  = Course::where('matiere_id',$request->id_matiere)->get();
        // $cours =Course::find($$matiere_id  == 1);
        
        
        return view('/profile.component.math', [
            'matiere_courses' => $matiere_courses,
        ]);
        
    }
}
