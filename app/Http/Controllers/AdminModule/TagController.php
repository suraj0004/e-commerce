<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view("admin.tag.index")->with([
            "tags" => $tags,
            "page" => "tag"
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'tag_name' => 'required|string|max:250',
        ])->validate();

        $tag = new Tag();
        $tag->name = $request->tag_name;
        $tag->slug = Str::slug($request->tag_name);
        $tag->save();

        $request->session()->flash('status', 'Tag Added successful!');
        return redirect()->back();

    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_tag_id' => 'required|numeric|exists:tags,id',
            'edit_tag_name' => 'required|string|max:250',
        ])->validate();

        $tag = Tag::find($request->edit_tag_id);
        $tag->name = $request->edit_tag_name;
        $tag->slug = Str::slug($request->edit_tag_name);
        $tag->save();

        $request->session()->flash('status', 'Tag Updated successful!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        Tag::where('id', $id)->delete();
        $request->session()->flash('status', 'Tag Deleted successful!');
        return redirect()->back();
    }
}
