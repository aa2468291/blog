@extends('layouts.app')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Tag Admin Panel</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Tag Admin Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">

            <ul class="list-group">

                @foreach($tags as $key =>$tag)
                    <li class="list-group-item clearfix">
                        <div class="float-left">
                            <div class="title">{{$tag->name}}</div>
                        </div>

                        <span class="float-right">
                            <button class="btn btn-danger pull-right" onclick="deleteTag({{$tag->id}})">Delete</button>
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
