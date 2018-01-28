<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $post = Posts::find($id);

        $next_id = Posts::where('id', '>', $post->id)->min('id');

        $prev_id = Posts::where('id', '<', $post->id)->max('id');

        return view('posts.index')->with('post', $post)
                                        ->with('prev', Posts::find($prev_id))
                                        ->with('next', Posts::find($next_id));


    }

    public function check(Request $request, $id) {

        $post = Posts::find($id);

        if ($post->answer == $request->otvet ){

           $post->test =  $request->user()->id;

           $post->save();

        } else
        {
            $post->test = '0';
        }

        return redirect()->back();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function main() {

        return view('welcome')->with('posts', Posts::all());

    }

    public function create()
    {
            return view('posts.create');
    }

    public function view() {


        return view('posts.view')->with('posts', Posts::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = Posts::create([

            'title' => $request->title,

            'content' => $request->content,

            'answer' => $request->answer


        ]);


        return redirect()->back();

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
