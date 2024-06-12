<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'matiere_id',
        'cours_id',
        'question',
        'correct_answer',
        'answer_option_1',
        'answer_option_2',
        'answer_option_3',
        
    ];
}
