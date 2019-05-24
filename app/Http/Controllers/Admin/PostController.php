<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.admin.posts.index')->with('posts', Post::orderBy('id', 'desc')->get());
    }

    public function create()
    {
        $categories = PostCategory::all();
  
        $tags = Tag::all();

        if ($categories->count() == 0 || $tags->count() == 0){
            Session::flash('info', 'You must have some category and tags before attempting to create a post'); 
            return redirect()->back();
        }

        return view('backend.admin.posts.create')->with('categories', $categories)->with('tags', Tag::all());
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_category_id = $request->post_category_id;
        $post->slug = str_slug($request->title);

        if($request->hasFile('featured')){
            $image = $request->file('featured');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'uploads/posts/' . $filename;
            Image::make($image)->resize(790, 250)->save($location);

            $post->featured = $location;
        }

        $post->save();

        $post->tags()->attach($request->tags);

        Session::flash('success', 'The blog post was Sucessfully saved');

        return redirect()->back();

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::find($id);

        $categories = PostCategory::all();

        if ($categories->count()== 0){
            Session::flash('info', 'You must have some category before attempting to create a post'); 
            return redirect()->back();
        }

        return view('backend.admin.posts.edit')->with('categories', $categories)->with('tags', Tag::all())->with('post', $post);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'featured' => 'image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_category_id = $request->post_category_id;
        $post->slug = str_slug($request->title);

         if ($request->hasFile('featured')){
            // add the new photo
            $image = $request->file('featured');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'uploads/posts/' . $filename;
            Image::make($image)->resize(790, 250)->save($location);

            $oldFilename = $post->image;
            // add the new photo
            $post->image = $location;
            // delete the old photo
            Storage::delete($oldFilename);

        }

        $post->save();

        $post->tags()->sync($request->tags);

        Session::flash('success', 'The blog post was Sucessfully Updated');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The post was just trashed');

        return redirect()->back();
     }
}
