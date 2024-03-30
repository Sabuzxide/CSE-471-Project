<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function updateOrCreateBlog($request, $id = null)
    {
        Blog::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'description' => $request->description,
            'image' => Helper::uploadImage($request->image, 'blog/img/', $id === null ? '' : Blog::find($id)->image, 600, 600),
        ]);
    }
}
