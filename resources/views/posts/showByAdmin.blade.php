@extends('layouts.frontend')
@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Single</h4>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li class="active"><a href="/posts/admin">Blog Admin Panel</a>
                        </li>
                        <li class="active">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="page-content">
        <div class="container">
            <div class="clearfix toolbox">

                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-right">Edit</a>
{{--                <a href="" class="btn btn-primary">Delete</a>--}}
                <button class="btn btn-danger pull-right" onclick="deletePost({{$post->id}})">Delete</button>

            </div>

                <h1>{{$post->title}}</h1>
                {{$post->content}}


        </div>
    </div>
@endsection