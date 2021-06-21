@extends('blogs.index')
@section('content')
    <div class="card">
        <h5 class="card-header">Blogs List</h5>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                <th scope="col">Teaser</th>
                <th scope="col">Created</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $key => $blog)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td><a href="{{ route('blogs.detail' , $blog->id) }}">{{$blog->title}}</a></td>
                    <td>{{$blog->teaser}}</td>
                    <td>{{$blog->created}}</td>
                    <td>
                        <a href="{{ route('blogs.edit' , ['id' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('blogs.destroy' , ['id' => $blog->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
