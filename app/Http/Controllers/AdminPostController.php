<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequestCreate;
use App\Photos;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequestCreate $request)
    {
        $user=Auth::user();
        $id=$user['id'];
        $input['user_id']=$id;
        $input=$request->all();

        If($file=$request->file('photo')){

            $filename = time() .$file->getClientOriginalName();

            $file->move('images/profile', $filename);
            $input['photo']=$filename;

        }

       $post= $user->posts()->create($input);
        if($images=$request->file('myfile')){
            foreach($images as $image) {
                $photosname = time() . $image->getClientOriginalName();
                $image->move('images/extra-images', $photosname);
                Photos::create(['path'=>$photosname,'post_id'=>$post->id]);
            }

        }



        return redirect('/admin/posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
