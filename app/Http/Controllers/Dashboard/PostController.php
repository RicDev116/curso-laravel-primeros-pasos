<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // dd(Category::find(1)->posts);
        // dd(Post::find(1)->category);
        // return route("post.create");
        // return redirect("/post/create");
        // return redirect()->route("post.create");
        // return to_route("post.create");
        $posts = Post::paginate(2);
        return view('dashboard.post.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        // Category::get()->where()
        // $categories = Category::get();
        $categories = Category::pluck('id','title');
        $post = new Post();
        // dd($categories[0]->title);
        // dd($categories);
        return view('dashboard.post.create',compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
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
        // $data = array_merge($request->all(),['image' => '']);

        //UNA MANERA DE HACER EL SLUG RAPIDAMENTE: 
        // $data['slug'] = Str::slug($data['title']);
        // $request->prepareForValidation();
        Post::create($request->validated());
        return to_route("post.index")->with('status','Registro creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        //

        return view('dashboard.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post): RedirectResponse
    {
        //
        // dd($request->validated());
        $data = $request->validated();
        if(isset($data['image'])){

            $ext = $data["image"]->extension();

            $data["image"] =  $filename = time().".".$ext;
            // dd(public_path("image", $filename));
            
            $request->image->move(public_path("image"), $filename);
        }
        $post->update($data);
        // $request->session()->flash('status','Registro actualizado');
        return to_route('post.index')->with('status','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        //
        $post->delete();
        return to_route('post.index')->with('status','Registro eliminado');
    }
}
