@extends('layouts.app')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Admin Panel</h4>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li class="active"><a href="/posts">Blog</a>
                        </li>
                        <li class="active">Blog Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="list-group">
                @foreach($posts as $key =>$post)
                    <a href="#" class="list-group-item">{{$post->title}}</a>
                @endforeach


            </div>
        </div>
    </div>
@endsection