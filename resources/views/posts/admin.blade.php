@extends('layouts.app')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Admin Panel</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Blog Admin Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">

            <div class="toolbox">
                <a href="/posts/create" class="btn btn-primary">create post</a>
            </div>

            {{--            <br class="hidden-xs"/>--}}


            <ul class="list-group">

                @foreach($posts as $key =>$post)
                    <li class="list-group-item clearfix">
                        <div class="float-left">
                            <div class="title">{{$post->title}}</div>
                            @if(isset($post->category))<small class="d-block text-muted">{{$post->category->name }}</small>@endif
                            <small class="author">{{$post->user->name}}</small>
                        </div>

                        <span class="float-right">
                            <a href="/posts/show/{{$post->id}}" class="btn btn-secondary">View</a>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger pull-right" onclick="deletePost({{$post->id}})">Delete</button>
                        </span>

                    </li>

                @endforeach

            </ul>
        </div>
    </div>

{{--    <form id="delete-form" action="/posts/id" method="post">
        @csrf
        <input type="hidden" name="_method" value="delete">

    </form>--}}






@endsection

@section('script')
@endsection
