<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        return View::make('posts.index')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = new Post();
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $id = $post->id;

        // create the validator
        $validator = Validator::make(Input::all(), Post::$rules);

    // attempt validation
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);

        // validation failed, redirect to the post create page with validation errors and old inputs
        } else {

            $post->save();

            return Redirect::action('PostsController@index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('posts.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'This shows a form to edit a post';
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return 'This changes a specific post';
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'This deletes a specific post';
    }
}