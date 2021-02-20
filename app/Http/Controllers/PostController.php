<?php

namespace App\Http\Controllers;

use App\blogpost;

use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "titles"=>'bail|required|min:5|max:15',
            "content"=>'required|min:10',
        ]);

        $post = new BlogPost();

        $post->titles = $request->input('titles');

        $post->content=$request->input('content');

        $post->save();

        $request->session()->flash('status','the blog post was created successfully');

        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',['post'=>BlogPost::findorfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',['post'=>BlogPost::findorfail($id)]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post= BlogPost::findorfail($id);

        $request->validate([
            "titles"=>'bail|required|min:5|max:15',
            "content"=>'required|min:10',
        ]);

        $post = new BlogPost();

        $post->titles = $request->input('titles');

        $post->content=$request->input('content');

        $post->save();

        $request->session()->flash('status','Blog POst was Updated ');

        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=BlogPost::findorfail($id);
        $post->delete();

        session()->flash('status','Blog delete sucssefuly');

        return redirect()->route('posts.index');
    }

}
