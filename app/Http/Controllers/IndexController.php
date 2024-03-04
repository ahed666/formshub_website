<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\SchemaOrg\Schema;

class IndexController extends Controller
{

    public function getAllImagesInFolder()
    {
        $folderPath = public_path('images/gallary'); // Replace with the actual path to your folder

        // Check if the folder exists
        if (File::isDirectory($folderPath)) {
            // Get all files in the folder
            $files = File::files($folderPath);

            // Filter the files to get only images (you can customize this based on your needs)
            $imageFiles = array_filter($files, function ($file) {
                return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'bmp']);
            });

            // Now $imageFiles contains the list of image files in the folder
            return count($imageFiles);
        }

        return 0;
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
        $gallaryImagesCount=$this->getAllImagesInFolder();

        return view('index',compact('gallaryImagesCount','schemaMarkup'));
    }
}
