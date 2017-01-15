<?php
/*
OLD STUFF BEFORE ADDING FROM PAGE 10 IN LARAVEL TUTORIAL
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //
}
<?php
*/
namespace App\Http\Controllers;

use Request;

use App\Post;

class PostController extends Controller
{

    public function index()
    {
        //
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show',compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post=Request::all();
        Post::create($post);
        return redirect('posts');
    }

    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
        $postUpdate=Request::all();
        $post=Post::find($id);
        $post->update($postUpdate);
        return redirect('posts');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('posts');
    }
}
