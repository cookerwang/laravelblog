@extends('app')
<h1>Articles: {!! $user->name !!} </h1>
<hr/>
@section('content')
    @foreach($articles as $article)
        <article class="format-image group">
            <h2 class="post-title pad">
                <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
            </h2>
            <div class="post-inner">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <div class="post-content pad">
                <div class="entry custom">
                    {!! mb_substr($article->content, 0, 64) !!}
                </div>
                <a href="/article/{{ $article->id }}" class="more-link-custom"><span><i>更多</i></span></a>
            </div>
        </article>
    @endforeach



@endsection