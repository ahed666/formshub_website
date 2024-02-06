<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSubscribe;
class PricingController extends Controller
{



    public function index()
    {
          $types=TypeSubscribe::all();
         return view('pricing',compact('types'));
    }
}
