<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\quiz;
use Termwind\Components\Dd;

class QuizController extends Controller
{
    public function index(){
        $matieres = Matiere::All();
        $coursess = Course::All();
        return view('/dashboard.component.quiz', [
                'matieres' => $matieres,
                'coursess' => $coursess,
                // dd($matieres),
                // dd($titre_cours),
        ]);
 
    } 

    public function quiz(Request $request)
    {
        $id_matiere =  $request->matiere;
        $id_cours =  $request->courses;
        $question = $request->question;
        $correct_answer = $request->correct_answer;
        $answer_option_1 = $request->answer_option_1;
        $answer_option_2 = $request->answer_option_2;
        $answer_option_3 = $request->answer_option_3;
        
            quiz::create([
                
                'matiere_id'=> $id_matiere,
                'cours_id'=> $id_cours,
                'question'=> $question,
                'correct_answer'=> $correct_answer,
                'answer_option_1'=> $answer_option_1,
                'answer_option_2'=> $answer_option_2,
                'answer_option_3'=> $answer_option_3,
            ]);
    
        
    
        return redirect()->back()->with('success', 'Inputs added successfully!');
    }

    public function centenuquiz(Request $request){
        $quiz_courses  = quiz::where('cours_id',$request->id_cours)->get();
        // $cours =Course::find($$matiere_id  == 1);
        
        
        return view('/profile.component.Mathématiques.cours1', [
            'quiz_courses' => $quiz_courses,
        ]);
        
    }

    

    public function quizresult(Request $request)
    {


      


        $answer_option = $request->input('answer_option');
        $correct_answer = $request->input('correct_answer');
        

        // dd($answer_option);
        // dd($correct_answer);
        

      
        
            
    
        
    
       
    }
    
}






