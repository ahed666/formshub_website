<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogDetails extends Model
{
    use HasFactory;
    protected $table="blog_details";
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }


}
