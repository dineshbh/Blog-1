@extends('layouts.postsTemplate')

@section('specific')
<div class="col-md-8"> <!-- Blog Entries Column -->

    <h1>My Blog</h1>
    <a class='btn btn-default' href={{ action('PostsController@create') }}>New Post</a>
    <hr>

    @if (Input::has('search'))
    <h2>Posts containing word "{{{ Input::get('search') }}}"</h2>
    @endif
    <article> <!-- Blog Post  -->
        @forelse($posts as $post)
        <h3>{{{ $post->title }}}</h3>

        <p><span class='glyphicon glyphicon-time'></span> {{{ $post->updated_at->format(Post::DATE_FORMAT) }}} by {{{ $post->user->email }}}</p>
        
        <img class='img-responsive' src="{{ $post->img }}" alt="">
        {{-- {{ HTML::image($post->img, 'alt text', ['class', 'img-responsive']) }} --}}
        
        <p>{{{ $post->body }}}</p>
        
        <a class="btn btn-sm btn-primary" href="posts/{{ $post->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>
        
        @empty
        <p>No mo' post</p>
        @endforelse
    </article>
    <hr>

    {{ $posts->links() }} <!-- Paginator -->
    {{-- $posts->appends(array('search' => '$search')->links() --}}
</div>
@stop