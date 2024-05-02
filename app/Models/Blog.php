<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogDetails;

class Blog extends Model
{
    use HasFactory;
    protected $table="blogs";

    public function details()
    {
        return $this->hasOne(BlogDetails::class);
    }
}
