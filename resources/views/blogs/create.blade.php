@extends('blogs.index')
@section('content')
<h2>Create new post</h2>
<form method="post" action="{{ route('blogs.store') }}">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Teaser</label>
        <textarea name="teaser" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
@endsection
