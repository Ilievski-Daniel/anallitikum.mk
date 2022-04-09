<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Post::all();
        return view('admin/index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Post::all();
        $cat = Category::all();
        return view('admin/create',['blog'=>$blog,'cat'=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:225',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ));

        if($request->hasfile('cover_image')){
            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time().'.'. $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpeg';
        }

        $blog = new Post;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category_id = $request->category_id;
        $blog->cover_image = $fileNameToStore;
        $blog->save();
        return redirect()->route('admin');
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
        return view('admin/show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog= Post::find($id);
        $cat= Category::all();
        return view('admin/edit', ['blog'=>$blog,'cat'=>$cat]);

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
        $blog = Post::find($id);
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=>'required',
            'cover_image' => 'image|nullable|max:1999'
        ));

        if($request->hasfile('cover_image')){
            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time().'.'. $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);


        }

        $blog = Post::find($id);
        $blog->title = $request->title;
        $blog->body= $request->body;
        $blog->category_id= $request->category_id;
        if($request->hasFile('cover_image')){
            $blog->cover_image = $fileNameToStore;
        }
        $blog->save();

        return redirect()->route('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Post::find($id);
        if($blog->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_image/'.$blog->cover_image);
        }
        $blog->delete();
        return redirect()->route('admin');
    }
}
