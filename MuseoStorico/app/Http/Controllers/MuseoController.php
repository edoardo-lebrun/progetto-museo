<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Session;

class MuseoController extends Controller
{
    public function index()
    {
        //
    }

    public function riservata()
    {
        $posts = Post::where('post_type', 'post')
            ->orderBy('created_at', 'desc')
            ->paginate();
        return view('area_riservata',['posts' => $posts]);
    }

    public function getSingle($post_slug)
    {
        $post = Post::where('post_slug', $post_slug)->first();

        return view('news.page', ['post' => $post]);

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
        $this->validate($request, [
            'title' => 'required',
            'preview' => 'required|max:250',
            'post_slug' => 'required|max:200',
            'content' => 'required',
        ],
            [
                'title.required' => 'Il Titolo deve essere inserito.',
                'preview.required' => 'L\'Anteprima deve essere inserita.',
                'content.required' => 'Il Corpo della Notizia deve essere inserito.',
                'post_slug.required' => 'L\'indirizzo del sito deve essere inserito.',
                'post_slug.max' => 'Massimo 200 caratteri',
                'preview.max' => 'Massimo 250 caratteri',
            ]);

        $post = new Post;

        $post->user_id = $request->user_id;
        $post->post_type = $request->post_type;
        $post->title = $request->title;
        $post->preview = $request->preview;
        $post->content = $request->content;
        $post->post_slug = $request->post_slug;

        $post->save();

        Session::flash('success', 'Pubblicato con successo');

        return redirect()->route('area');
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
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
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
        $this->validate($request, [
            'title' => 'required',
            'preview' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Il Titolo deve essere inserito.',
            'preview.required' => 'L\'Anteprima deve essere inserita.',
            'content.required' => 'Il Corpo della Notizia deve essere inserito.',
        ]);

        $post = Post::findOrFail($id);

        $post->user_id = $request->input('user_id');
        $post->title = $request->input('title');
        $post->preview = $request->input('preview');
        $post->content = $request->input('content');
        $post->post_slug = $request->input('post_slug');
        $post->post_type = $request->input('post_type');

        $post->save();

        Session::flash('success', 'Post Aggiornamento riuscito');

        return redirect()->route('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        $posts->delete();



        return redirect('area')->with(Session::flash('success', 'Eliminato con successo'));
    }


    public function newslist()
    {
        $posts = Post::where('post_type', 'post')->paginate();
        return view('news', ['posts' => $posts]);
    }
}
