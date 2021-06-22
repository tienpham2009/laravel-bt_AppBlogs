@extends('category.index')
@section('content')
    <h2>Create new category</h2>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary"/>
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
