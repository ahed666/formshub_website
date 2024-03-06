<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\SchemaOrg\Schema;
use App\Models\GallaryImages;

class IndexController extends Controller
{

    public function getAllImagesGallary()
    {
        return GallaryImages::all();
    }

    public function index(Request $request){
        if (substr($request->url(), -1) === '/') {
            // Redirect to the URL without the trailing slash
            return Redirect::to(rtrim($request->url(), '/'), 301);
        }
        $schemaMarkup=Schema::webPage()
        ->name('Home')
        ->description('Welcome to our website. Explore our products and services.')
        ->url(url()->current());
        $gallaryImages=$this->getAllImagesGallary();

        return view('index',compact('gallaryImages','schemaMarkup'));
    }
}
