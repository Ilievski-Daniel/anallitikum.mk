<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    
    public function forum(){
        
        $blog = Post::all();
        return view('blog.forum')->with(['blog' => $blog]);
    }
    public function kultura(){
        $blog = Post::all();
        return view('blog.kultura')->with(['blog' => $blog]);
    }
    public function intervju(){
        $blog = Post::all();
        return view('blog.intervju')->with(['blog' => $blog]);
    }
    public function filmovi(){
        $blog = Post::all();
        return view('blog.filmovi')->with(['blog' => $blog]);
    }
    public function sport(){
        $blog = Post::all();
        return view('blog.sport')->with(['blog' => $blog]);
    }
    public function donaci(){
        $blog = Post::all();
        return view('blog.donaci')->with(['blog' => $blog]);
    }
    public function citati(){
        $blog = Post::all();
        return view('blog.citati')->with(['blog' => $blog]);
    }
    public function kontakt(){
        $blog = Post::all();
        return view('blog.kontakt')->with(['blog' => $blog]);
    }
    public function test(){
        $blog = Post::all();
        return view('blog.test')->with(['blog' => $blog]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // where('id', '>=' , 0)->orderByDesc('id')->get()
        $blog = Post::all() ;
        return view('blog/index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Post::find($id);
        return view('blog/single' , compact('blog'));
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
    public function update(Request $request, $id)
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
