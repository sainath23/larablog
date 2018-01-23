@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    @if(count($posts) > 0)
                    <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th class="pull-right">Action</th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <th>{{ $post->title }}</th>
                                <th><a href="/posts/{{ $post->id }}/edit" class="btn btn-default pull-right">Edit</a></th>
                                <th>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirmDelete()']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}
                                </th>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <h3>No blog post created by you!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function confirmDelete() {
    if(confirm("Do you want to delete this post?")) {
        return true;
    }
    else {
        return false;
    }
}
</script>
@endsection
