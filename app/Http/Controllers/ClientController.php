<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
       
       $response = Http::get('https://jsonplaceholder.typicode.com/posts');
       return $response->json();
    }
    
    public function getPostById($id){
        
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
    
    public function addPost(){
        $postData = [
            'userId' => '10',
            'title' => 'this is post title',
            'body' => 'this is post testing throw http request',
        ];
        
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', $postData);
        return $post->json();
    }
    
    public function updatePost($id){
        $postData = [
            'title' => 'this is update post title',
            'body' => 'this is updated post body',
        ];
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, $postData);
        return $post->json();
    }
    
    public function deletePost($id){
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
}
