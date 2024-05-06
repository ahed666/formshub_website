<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogDetails;

class BlogsController extends Controller
{



   public function index(){
    $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
    ->name('Blog posted')
    ->description('Explore our latest blog posts for insightful articles on formshub.  Stay informed and inspired with our expertly crafted content.')
    ->url(url()->current());

    $blogs = Blog::with('details')->get();

    return view('blog',['blogs' => $blogs,'schemaMarkup'=>$schemaMarkup]);

   }

   public function detailsBlog($blogId){

    $blog = Blog::with('details')->find($blogId);
    $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
    ->name($blog->title)
    ->description($blog->header)
    ->url(url()->current());
    return view('blog-single',['blog' => $blog,'schemaMarkup'=>$schemaMarkup]);

   }


}
