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
                {{-- <tr>
                    <th scope="row">a</th>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                </tr> --}}
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Edit</a>
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
