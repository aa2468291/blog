@extends('layouts.app')
@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Single</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/posts/admin">Blog Admin Panel</a>
                        </li>
                        <li class="breadcrumb-item active">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="page-content">
        <div class="container">
            <h1 class="mb-0">{{$post->title}}</h1>
            <small class="author">{{$post->user->name}}</small>
            <div class="toolbox text-left mt-3">

                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-right">Edit</a>
                {{--                <a href="" class="btn btn-primary">Delete</a>--}}
                <button class="btn btn-danger pull-right" onclick="deletePost({{$post->id}})">Delete</button>
            </div>
            <div class="content">{{$post->content}}</div>


        </div>
    </div>
@endsection
