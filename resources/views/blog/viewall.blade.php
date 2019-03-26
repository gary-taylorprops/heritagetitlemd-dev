@extends('layouts.admin')

@section('title', 'View All Blog Posts | Heritage Title, Ltd.')

@section('content')

<section id="blogs">
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
    @if(count($blogs) > 0)
        @foreach($blogs as $blog)
            <tr>
              <th scope="row">{{ $blog->id }}</th>
              <td>{{ $blog->created_at }}</td>
              <td>{{ $blog->title }}</td>
              <td><a href="/blog/{{$blog->id}}/edit" class="btn btn-primary">Edit</a></td>
              <td>{!! Form::open(['action'=>['PostsController@destroy',$blog->id,'method'=>'POST','class'=>'pull-right']]) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}</td>
            </tr>
        @endforeach
        {{ $blogs->links() }}
        <a href="/blog/create" class="btn btn-primary" style="margin: 2em;">Create New Blog Post</a>
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