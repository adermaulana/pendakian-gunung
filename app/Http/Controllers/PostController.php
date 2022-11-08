<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')) {

            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;

        }

        if(request('author')) {

            $author = User::firstWhere('username',request('author'));
            $title = ' by ' . $author->name;

        }

        return view('posts', [
            "title" => "Portal Berita". $title,
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);

    }

    public function show(Post $post) {

        return view('post', [
            "title" => "Single Post",
            "posts" => $post
        ]);

    }

    public function category(Category $category) {

        return view('posts', [
            "title" => " Post By Category : $category->nama",
            "posts" => $category->posts->load('category','author')

        ]);

    }

    public function categories(Category $category) {

        return view('categories', [
            "title" => 'Post Categories',
            "categories" => Category::all()

        ]);

    }

    public function authors(User $author) {

        return view('posts', [
            "title" => "Post By Authors : $author->name",
            "posts" => $author->posts->load('category','author'),

        ]);

    }



}