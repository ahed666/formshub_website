<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrequencyAskedQuestion;
use App\Models\FaqCategory;
use Spatie\SchemaOrg\Schema;

class KnowledgeBaseController extends Controller
{

    public function index($id=null){

        $categoriesWithQuestions = FaqCategory::with('questions')->get();
        $schemaMarkup = Schema::webPage()
        ->name('Knowledge')
        ->description('Explore our knowledge base to learn more about our products and services.')
        ->url(url()->current());

        if($id)
        {
            if($current_question=FrequencyAskedQuestion::whereid($id)->first())
            {

                return view('knowledgebase',compact('current_question','categoriesWithQuestions','schemaMarkup'));}
            else
            {
                abort(403, 'Unauthorized action.');

            }
        }
        else
        {    $current_question=null;
            return view('knowledgebase',compact('current_question','categoriesWithQuestions','schemaMarkup'));

        }
    }
}
