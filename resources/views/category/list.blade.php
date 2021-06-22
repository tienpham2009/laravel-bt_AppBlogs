@extends('category.index')
@section('content')
    <div class="card">
        <h5 class="card-header">Blogs List</h5>
        <div class="col-12">
            <div class="row">
                <div class="col-2" style="margin: 10px">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categorys as $key => $category)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td><a href="{{-- route('blogs.detail' , $blog->id) --}}">{{$category->name}}</a></td>
                    <td>
                        <a href="{{ route('category.edit' , ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('category.destroy' , ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
