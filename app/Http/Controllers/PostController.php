<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $products = Post::where('status', 2)->latest('id')->paginate(6); 
        return view('pages.products.index', compact('products')); 
    }

    public function show(Post $post){

        $this->authorize('published', $post);

        return view('pages.posts.show', compact('post'));
    }
    
    public function category(Category $category){
        $products = Post::where('category_id', $category->id)
                            ->where('status', 2)
                            ->latest('id')
                            ->paginate(16);

        return view('pages.posts.category', compact('posts', 'category'));
    }
}
