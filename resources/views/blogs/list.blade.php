@extends('blogs.index')
@section('content')
    <div class="card">
        <h5 class="card-header">Blogs List</h5>
        <div class="col-12">
            <div class="row">
                <div class="col-1" style="margin: 10px">
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
                </div>
                <div class="col-3" style="margin: 10px">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add new post</a>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                <th scope="col">Teaser</th>
                <th scope="col">Created</th>
                <th scope="col">Category</th>
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
                    @if($blog->category)
                        <td>{{$blog->category->name}}</td>
                    @else
                        <td>{{ 'chua co the loai' }}</td>
                    @endif
                        <td>

                            <a href="{{ route('blogs.edit' , ['id' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('blogs.destroy' , ['id' => $blog->id]) }}"
                               class="btn btn-danger">Delete</a>
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
