@extends('layouts.admin')

@section('title', 'Dashboard | Heritage Title, Ltd.')

@section('content')

<!-- Start Blog Layout -->
<div class="container">
  <div class="row" style="display:block;">
  	   <p>The search results for your query: <strong>{{ $query }}</strong></p>
  	   <table class="table table-striped">
  	       <thead>
  	           <tr>
  	               <th>Title</th>
  	               <th>Description</th>
  	               <th>Edit</th>
  	           </tr>
  	       </thead>
  	       <tbody>
  	           @foreach($posts as $post)
  	           <tr>
  	               <td>{{$post->title}}</td>
  	               <td>{{ str_limit(strip_tags(html_entity_decode($post->body)),180) }}</td>
  	               <td><a class="btn btn-primary" href="/blog/{{$post->id}}/edit">Edit</a>
  	           </tr>
  	           @endforeach
  	       </tbody>
  	   </table>
  </div>
  <div class="row">
  	<div class="col-md-12">
  		{{ $posts->links() }}
  	</div>
  </div>
</div>

@endsection