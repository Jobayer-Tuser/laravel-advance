<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//for crud operation we need to add DB

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
        
    }
    public function create(){
        
        return view('posts.create');
        
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        //when we dont have any model then we have to insert data like this
        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back()->with('post_created','Post created successfully');
        
    }
    public function edit($id){
        
        $posts = DB::table('posts')->where('id', $id)->first();
        return view('single-post', compact('posts'));
    }
    public function update(Request $request, $id){
        
        DB::table('posts')->where('id', $id )->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
    public function destroy($id){
        
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'post deleted successfully');
        
    }
    
    
    public function innerJoinClause(){
        
        $innerJoin = DB::table('users')
                ->join('posts', 'users.id', '=',  'posts.user_id')
                ->select('users.name', 'posts.title', 'posts.description')
                ->get();
        return $innerJoin;
    }
    
    public function leftJoinClause(){
        
        $leftJoin = DB::table('users')
                    ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
                    ->get();
        return $leftJoin;
    }
    
    public function rightJoinClause(){
        
        $rightJoin = DB::table('users')
                    ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
                    ->get();
        return $rightJoin;
    }
}
