<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DemoController extends Controller
{
    // public function index(){
    //     return 'All Products';
    // }

    public function showAllPost(){

        $showAllPost = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $showAllPost->json();
    }

    public function showSinglePost($id){

        $showSinglePost = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $showSinglePost->json();
    }

    public function addPost(){

        $addPost = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=> 5,
            'title'=>'New Title',
            'body'=>'New Body',
        ]);
        return $addPost->json();
    }

    public function editPost($id){

        $editPost = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id,[
            'userId'=> 5,
            'title'=>'New Title Updated',
            'body'=>'New Body Updated',
        ]);
        return $editPost->json();
    }

    public function deletePost($id){

        $deletePost = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $deletePost->json();
    }
}
