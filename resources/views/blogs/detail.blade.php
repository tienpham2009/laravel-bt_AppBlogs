<p>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Return to posts</a>
</p>
<h1>Title: {{$blog->title}}</h1>
<p>Teaser: {{$blog->teaser}}</p>
<p>Content: {{$blog->content}}</p>
<p>created: {{$blog->created}}</p>
