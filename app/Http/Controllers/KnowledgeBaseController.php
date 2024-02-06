<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrequencyAskedQuestion;
use App\Models\FaqCategory;

class KnowledgeBaseController extends Controller
{

    public function index($id=null){

        $categoriesWithQuestions = FaqCategory::with('questions')->get();


        if($id)
        {
            if($current_question=FrequencyAskedQuestion::whereid($id)->first())
            {
                
                return view('knowledgebase',compact('current_question','categoriesWithQuestions'));}
            else
            {
                abort(403, 'Unauthorized action.');

            }
        }
        else
        {    $current_question=null;
            return view('knowledgebase',compact('current_question','categoriesWithQuestions'));

        }
    }
}
