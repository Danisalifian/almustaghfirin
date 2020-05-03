<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Photo;
use App\Post;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderby('created_at','desc')->paginate(3);
        $photos = Photo::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at','desc')->paginate(2);
        return view('landing', ['posts' => $posts, 'photos' => $photos, 'videos' => $videos]);
    }

    public function berita()
    {
        $posts = Post::orderby('created_at','desc')->paginate(9);
        return view('pages/berita')->with('posts', $posts);
    }

    public function galeri()
    {
        $photos = Photo::orderBy('created_at', 'desc')->paginate(9);
        $videos = Video::orderBy('created_at','desc')->paginate(2);
        return view('pages/galeri', ['photos' => $photos, 'videos' => $videos]);
    }

    public function photo()
    {
        $photos = Photo::orderBy('created_at', 'desc')->paginate(9);
        return view('pages/photo')->with('photos', $photos);
    }

    public function video()
    {
        $videos = Video::orderBy('created_at','desc')->paginate(4);
        return view('pages/video')->with('videos', $videos);
    }

    public function tentang()
    {
        return view('pages/tentang');
    }

    public function trial()
    {
        return view('pages/trial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_berita($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
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
