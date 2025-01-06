<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::with('user')
        //                 ->where('title','News Title Two')//if we want to show data from another table then user method (withWhereHas).
        //                 ->get();

        // $posts = Post::withWhereHas('user',function($query){
        //                  $query->where("name","salman khan"); 
        //                  })->get();

        $users = User::where("name","salman khan")->get();
        $posts = Post::whereBelongsTo($users)->get();

        return $posts;

        // echo $posts->title . "<br>";
        // echo $posts->description . "<br>";
        // echo $posts->user->name . "<br>";

        // foreach($posts as $post){
        //     echo "<div style='border:1px solid red;margin:0 0 10px'>
        //              <h3>$posts->title</h3>
        //              <span>{$posts->user->name}</span>
        //              <p>$posts->description</p>
        //           </div>";
        // }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = new Post([
        //     'title' => 'News Title - Test',
        //     'description' => 'just testing...'
        // ]);

        // $user = User::find(2);

        // $user->post()->save($post);


        $user = User::find(2);
        $user->post()->create([
                'title' => 'News Title 2 - Test',
                'description' => 'just testing 2...'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
