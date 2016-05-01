<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use Auth;

class PostController extends Controller
{
    
    public function __construct(){
         $this->middleware('auth.admin', ['except' => ['showPosts', 'showIndivPosts']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPosts()
    {
        //
       // $posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts', compact('posts'));
    }
    
    public function adminPosts()
    {
        //
       // $posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('myposts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreationForm()
    {
        //
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createPost(CreatePostRequest $request)
    {
        //
        $post = Post::create($request->all());
        
        $file = $request->file('photo');
        $newName = 'photo'.$post->id.'.jpg';
        $file->move('images', $newName);
        $post->photo = $newName;
        $post->save();
        
        return redirect('posts/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showIndivPosts($id)
    {
        //
        $post = Post::find($id);
        return view('post', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
