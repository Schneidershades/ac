<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Tag;
use Session
use Image

class PostCategoryController extends Controller
{
    
    public function index()
    {
        return view('backend.admin.post_categories.index')->with('categories', PostCategory::orderBy('id', 'desc')->get());
    }

    public function create()
    {
        return view('backend.admin.post_categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $category = new PostCategory;

        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        Session::flash('success', 'You successfully created the Category');

        return redirect()->route('categories');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = PostCategory::find($id);
        return view('backend.admin.post_categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = PostCategory::find($id);
        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'You successfully updated the Category');

        return redirect()->route('categories');

    }

    public function destroy($id)
    {
        $category = PostCategory::find($id);
        foreach ($category->posts as $post){
            $post->forceDelete();
        }
        $category->delete();
        Session::flash('success', 'You successfully deleted the Category');
        return redirect()->route('categories');
    }
}
