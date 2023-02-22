<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;    
use Ramsey\Uuid\Type\Integer;

class PostController extends Controller
{
    

    //$id untuk mengambil parameter yg ada pada
    // public function post(Request $request, $id){
    //     return view('post',[
    //         "id" => $id,
    //         "title" => 'Post',
    //         "posts" => Post::all()
    //     ]);
    // }
    public function index(){
        
        return view('posts', [
            "title" => "All Posts",
            //get() ialah sebuah fungsi untuk mengambil semua data di dalam database
            //bisa juga berfungsi mengambil data yg ada pada model clas post
            //filter() ngambil dari model
            "posts" => Post::latest()->Filter()->get()
        ]);
    }

    public function show(Post $post){

        return view("post", [
            "title" => "Single Post",
            "posts" => $post
        ]);

    }

    //request page author
    public function author(User $author){
        return view('posts', [
            'title' => 'Post By : '.$author->name,
            //lazyeagerloader mengambil data yg terkait pada author
            'posts' => $author->posts->load('category', 'user'),
        ]);
    }

    //request page berdasarkan category
    public function categories(Category $category){
        return view('posts', [
            'title' => 'Post By :'.$category->name,
            'posts' => $category->posts->load('category', 'user'),
            'category' => $category->name
        ]);
    }

    //request page berdasarkan dari judul categori
    public function TitleCategory(Category $categories){
        return view('categories', [
            'title' => 'Post By'.$categories->name,
            'categories' => $categories->all()
        ]);
    }

}
