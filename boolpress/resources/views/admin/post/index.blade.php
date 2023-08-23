@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->author}}</td>
                        <td>
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <a href="" class="btn btn-warning btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
