<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSubscribe;
use Spatie\SchemaOrg\Schema;

class PricingController extends Controller
{



    public function index()
    {
        $schemaMarkup = Schema::webPage()
            ->name('Prices')
            ->description('View our pricing plans and choose the one that best fits your needs.')
            ->url(url()->current());
          $types=TypeSubscribe::all();
         return view('pricing',compact('types','schemaMarkup'));
    }
}
