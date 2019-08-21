@extends('layouts.app')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Edit Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/categories">Category Admin Panel</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <div class="page-content">
        <div class="container">

            @include('categories._form')

{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}


{{--            <form method="post" action="/posts/{{$post->id}}">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="_method" value="put">--}}
{{--                <input type="hidden" name="id" value="{{$post->id }}">--}}
{{--                legacy--}}

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Title</label>--}}
{{--                    <input type="text" class="form-control" name="title" value="{{$post->title}}">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">Content</label>--}}
{{--                    <textarea class="form-control" name="content" rows="8" cols="80">{{$post->content}}</textarea>--}}
{{--                </div>--}}

{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>--}}

{{--            </form>--}}
        </div>
    </div>


@endsection
