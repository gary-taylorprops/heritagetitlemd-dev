@extends('layouts.admin')
@section('title', 'View All Blog Posts | Heritage Title, Ltd.')
@section('content')
<section id="blogs">
  <div class="container">
    <div class="row" style="align-items: baseline;">
      <div class="col-md-6"><a href="/blog/create" class="btn btn-primary" style="margin: 2em;">Create New Blog Post</a></div>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Date Created</th>
          <th scope="col">Title</th>
          <th scope="col">View</th>
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
          <td><a href="/blog/{{$blog->id}}/{{ $blog->slug }}" class="btn btn-primary" target=_blank">Show</a></td>
          <td><a href="/blog/{{$blog->id}}/edit" class="btn btn-primary">Edit</a></td>
          <td><a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal">Delete</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div class="row">
      <div class="col-md-12">
        <p>No Posts Found</p>
      </div>
    </div>
    @endif
    <div class="row" style="align-items: baseline;">
      <div class="col-md-6">{{ $blogs->links() }}</div>
    </div>
  </div>
</section>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">You will not be able to recover blog post if you delete.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        {!! Form::open(['action'=>['PostsController@destroy',$blog->id,'method'=>'POST','class'=>'pull-right']]) !!}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
@endsection