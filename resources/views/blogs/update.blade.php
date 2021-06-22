@extends('blogs.index')
@section('content')

<h2>Create new post</h2>
<form method="post" action="{{ route('blogs.update' , ['id' => $blog->id]) }}">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $blog->title }}"/>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control">{{ $blog->teaser }}</textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" >{{ $blog->content }}</textarea>
    </div>
    <div class="form-group">
        <label>Date Created</label>
        <input type="date" name="dateCreate" class="form-control" value="{{ $blog->created }}"/>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control col-2">
            @foreach($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
@endsection
