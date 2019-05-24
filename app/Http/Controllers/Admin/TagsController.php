<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    
    public function index()
    {
        return view('backend.admin.tags.index')->with('tags', Tag::all());
    }

    public function create()
    {
        return view('backend.admin.tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tag' => 'required'
        ]);

        $tag = new Tag;

        $tag->tag = $request->tag;
        $tag->save();

        Session::flash('success', 'You successfully created the Tag');

        return redirect()->route('tags');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('backend.admin.tags.edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tag' => 'required'
        ]);

        $tag = Tag::find($id);

        $tag->tag = $request->tag;
        $tag->save();

        Session::flash('success', 'Tag updated');

        return redirect()->route('tags');
    }

    public function destroy($id)
    {
        Tag::destroy($id);

        Session::flash('success', 'Tag Deleted.');

        return redirect()->back();
    }
}
