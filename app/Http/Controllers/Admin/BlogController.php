<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blogs' => Blog::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        Blog::updateOrCreateBlog($request);

        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Blog::updateOrCreateBlog($request, $blog->id);

        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function status(Blog $blog)
    {
        if ($blog->status == 1) {
            $blog->status = 0;
            $message = 'Deactivate Successfully!';
        } else {
            $blog->status = 1;
            $message = 'Activated Successfully!';
        }
        $blog->save();
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image){
            if (file_exists($blog->image)){
                unlink($blog->image);
            }
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully!');
    }
}
