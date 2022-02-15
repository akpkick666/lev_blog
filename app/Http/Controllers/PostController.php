<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest; // useする

class PostController extends Controller
{
    public function index(Post $post){
        $client = new \GuzzleHttp\Client();
        
        $url = 'https://opendata.resas-portal.go.jp/api/v1/cities?prefCode=11';
        
        $response = $client->request(
            'GET',
            $url,
            ['headers' => [
                'X-API-KEY' => config('services.resas.key'),
            ],
        ]);
        
        $area_cities = json_decode($response->getBody(), true);
        dd($area_cities);
        
        foreach ($area_cities["result"] as $city){
            $area_names = [$city["cityName"]];
            dd($area_names);
        };   
       
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post){
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(){
        return view("posts/create");
    }
    
    public function store(PostRequest $request, Post $post){
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post){
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post){
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post){
        $post->delete();
        return redirect('/');
    }
}
