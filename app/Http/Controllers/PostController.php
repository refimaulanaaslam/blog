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
        $title = '';
        if (request('category')) {
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in ' . $category->name;
        }
        if (request('user')) {
                $user = User::firstWhere('username', request('user'));
                $title = ' in ' . $user->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->Filter(request(['search','category', 'user']))->paginate(7)->withQueryString()
            //get() ialah sebuah fungsi untuk mengambil semua data di dalam database
            //bisa juga berfungsi mengambil data yg ada pada model clas post
            //filter() ngambil dari model
        ]);
    }

    public function show(Post $post){

        return view("post", [
            "title" => "Single Post",
            "posts" => $post
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
