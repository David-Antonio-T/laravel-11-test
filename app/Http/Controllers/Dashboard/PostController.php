<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//crear y eliminar devuelve verdadero y falso, pero editar un nuevo objeto, se pude verificar con dd()
    {
        $post = Post::find(1);
        $category = Category::find(1);
        dd($category->posts);
        /*$post->update(
            [
                'title' => 'test new',
                'slug' => 'test slug',
                'content' => 'test content',
                'image' => 'test image',
            ]
        );*/



        /*Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );*/
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}