<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeQuestion;
class TypesQuestionsController extends Controller
{
    //
    public function index()
    {
        $types_questions=TypeQuestion::all();
        return view('types_questions',compact('types_questions'));
    }

}
