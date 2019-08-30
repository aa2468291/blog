@php
    $categories = \App\Category::all();
    $latestPosts = \App\Post::orderBy('created_at','desc')->take(3)->get();
    $latestComments = \App\Comment::orderBy('created_at','desc')->take(4)->get();
    $tags= \App\Tag::has('posts')->withCount('posts')->orderBy('posts_count','desc')->get();
@endphp


<!--latest post widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">latest post</h6>
    </div>
    <ul class="widget-latest-post">
        @foreach ($latestPosts as $post)
            <li>
                <div class="thumb">
                    <a href="/posts/{{ $post->id }}">
                        @if($post->thumbnail)
                            <img src="{{ $post->thumbnail }}" alt="thumbnail">
                        @else
                        <img src="/assets/img/post/post-thumb.jpg" alt=""/>
                        @endif
                    </a>
                </div>
                <div class="w-desk">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    {{ $post->created_at->format('F d, Y') }}
                </div>
            </li>
        @endforeach


    </ul>
</div>
<!--latest post widget-->

<!--category widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">category</h6>
    </div>
    <ul class="widget-category">
        @foreach($categories as $category)
            <li><a href="/posts/category/{{ $category->id }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
<!--category widget-->

<!--comments widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">Latest comments </h6>
    </div>
    <ul class="widget-comments">
        @foreach ($latestComments as $comment)
            <li>{{ $comment->name }} on <a href="/posts/{{ $comment->post_id }}">{{ $comment->post->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
<!--comments widget-->

<!--tags widget-->
<div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">tag cloud</h6>
    </div>
    <div class="widget-tags">
        @foreach ($tags as $tag)
            <a href="/posts/tag/{{ $tag->id }}">{{ $tag->name }}</a>
        @endforeach


    </div>
</div>
<!--tags widget-->
