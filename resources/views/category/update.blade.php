@extends('category.index')
@section('content')
    <h2>Update category</h2>
    <form method="post" action="{{ route('category.update' , ['id' => $category->id]) }}">
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <select name="name" class="form-control col-3">
                @foreach($categorys as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-primary"/>
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
