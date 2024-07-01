<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('post')->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //***this is first method for store data into table user and post****


    //    $user = User::create([
    //         'name' => 'Tripti Kona debi',
    //         'email' => 'tripti1@kona.com',

    //     ]);

    //     $post = Post::create([
    //         'title' => 'Tripti kona First Post',
    //         'description' => "This is tripti konapost",
    //         'user_id' => $user->id
    //     ]);


    //Here is the another method for post existing user

    $post = new Post([
        'title' => 'Yantri First Post',
        'description' => "This is Yantri konapost",
    ]);

    $user = User::find(9);

    $user->post()->save($post);


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
