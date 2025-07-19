<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use function Termwind\render;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Post::with("user")->where("user_id", auth()->id())->latest()->paginate(6);
        return view('Blog.index', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        "title" => "required|max:255",
        "body" => "required",
        "image" => "max:2048"
    ]);

    // // Handle image upload
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('posts', 'public');
    //     $data['image'] =  $imagePath; // Store the correct path in the DB
    // }

    // Assign the authenticated user's ID
    $data['user_id'] = auth()->id();

    Post::create($data);

        return to_route('post.index')->with("success", "post berhasil di buat");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Post::find($id);

        Gate::authorize("view", $data);

        return view("Blog.show", compact("data"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Post::find($id);

        if(!$data) {
            return to_route('post.index')->with("error", "Post Tidak ditemukan");
        }

        Gate::authorize("update", $data);


        return view("Blog.edit", compact("data"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            "title" => "required|max:255",
            "body" => "required",
            "image" => "nullable|mimes:png,jpg,jpeg,svg|max:2048"
        ]);
    
        // Handle image upload
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('posts', 'public');
    //     $data['image'] =  $imagePath; // Store the correct path in the DB
    // }


    
        $post->update($data);
    
            return to_route('post.index')->with("success", "post berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $data = Post::find($id);

        Gate::authorize("delete", $data);


        Post::where("id", $data->id)->delete();
        return to_route('post.index')->with("success", "Post berhasil di hapus");   
    }
}
