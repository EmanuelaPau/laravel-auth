@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-12">
        <table class="table hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">a</th>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                </tr>
                {{-- @foreach ($post as $posts)
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
       </div>
    </div>
</div>
@endsection
