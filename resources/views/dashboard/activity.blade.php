@extends('layouts.admin')

@section('title', 'View All Blog Posts | Heritage Title, Ltd.')

@section('content')

<section id="posts">
  <div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date Created</th>
      <th scope="col">Title</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->created_at }}</td>
              <td>{{ $post->title }}</td>
              <td><a href="/dashboard/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
              <td>{!! Form::open(['action'=>['PostsController@destroy',$post->id,'method'=>'POST','class'=>'pull-right']]) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}</td>
            </tr>
        @endforeach
        {{ $posts->links() }}
    </tbody>
</table>

    	@else
    		<div class="row">
	    		<div class="col-md-12">
    				<p>No Posts Found</p>
    			</div>
    		</div>
    	@endif
  </div>
</section>
@endsection