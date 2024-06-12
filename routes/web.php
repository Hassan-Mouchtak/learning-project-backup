<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/leandinpage', function () {
    return view('leandingpage');
});
 

Route::get('/signup', function () {
    return view('/signup');
});


Route::get('/login', function () {
    return view('/login');
});


Route::get('/dashboard', function () {
    return view('/dashboard.dashboard1');
});


Route::get('/signupadmin', function () {
    return view('/dashboard.SignUp_admin');
});

Route::get('/signinadmin', function () {
    return view('/dashboard.SignIn_admin');
});


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\UserController;
 
Route::post('/dashboard', [AdminController::class, 'index1']) ->name('index1');

Route::post('/adminsigne', [AdminController::class, 'index2']) ->name('index2');

Route::post('/signup', [UserController::class, 'index3']) ->name('index3');
Route::post('/signin', [UserController::class, 'index4']) ->name('index4');


Route::get('/etudiant', [UserController::class, 'etudiant']) ->name('etudiant');


// Route::get('/etudiant', [UserController::class, 'etudiant']) ->name('etudiant');


// Route::get('/cours', [UserController::class, 'cours']) ->name('cours');

// DELETED ROUTE
Route::get('/etudiant/softDelete/{id}', [UserController::class, 'softDelete']) ->name('etudiantDelete');


// Route::get('/userprofile', function () {
//     return view('/profile/component.userprofile');
// });

Route::get('/master', function () {
    return view('/profile/layout.master');
});


Route::get('/offers', function () {
    return view('/profile.component.offers');
});

Route::get('/matiers', function () {
    return view('/profile.component.matiers');
});

Route::get('/master1', function () {
    return view('/dashboard/layout.master');
});

// Route::get('/etudiant', function () {
//     return view('/dashboard/component.student');
// });



use App\Http\Controllers\InputController;
use App\Http\Controllers\QuizController;

Route::get('/cours',[InputController::class, 'index'])->name('indexInput');


Route::post('/store-inputs', [InputController::class, 'store'])->name('storeInputs');


Route::post('/quiz-inputs', [QuizController::class, 'quiz'])->name('quizInputs');
Route::post('/quiz-result', [QuizController::class, 'quizresult'])->name('quizResult');


Route::get('/matiere/{id_matiere}', [CoursController::class, 'etudiant']);

Route::get('/contacte', function () {
    return view('/profile.component.contacte');
});

// route quiz cours
// Route::get('/Limites et continuité.quiz', function () {
//     return view('/profile.component.Mathématiques.cours1');
// });

Route::get('/Limites et continuité.quiz/{id_cours}', [QuizController::class, 'centenuquiz']);

Route::get('/quiz',[QuizController::class, 'index'])->name('indexquiz');










