<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo('Hola');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Category::get()->where()
        // $categories = Category::get();
        $categories = Category::pluck('id','title');
        // dd($categories[0]->title);
        // dd($categories);
        return view('dashboard.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // echo"store";
        //
        // var_dump($request);
        // dd($request);
        // dd($request->all());
        // echo request("title");
        // echo $request->input('slug');

        //DEMO
        // $validated = $request->validate(StoreRequest::myRules());
        // dd($validated);

        // $validated = Validator::make($request->all(),StoreRequest::myRules());
        $data = array_merge($request->all(),['image' => '']);
        Post::create($data);
        
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
