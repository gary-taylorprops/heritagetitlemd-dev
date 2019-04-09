@extends('layouts.admin')
@section('title', 'Edit Post | Heritage Title, Ltd.')
@section('content')
<section id="create-post">
  <div class="container">
    <h1>Edit Blog Post</h1>
    {!! Form::open(['action' => ['PostsController@update',$blog->id],'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title',$blog->title,['class'=>'form-control','placeholder'=>'title','required'=>'required'])}}
    </div>
    <div class="form-group">
      {{Form::label('slug','SEO Friendly Slug')}}
      {{Form::text('slug',$blog->slug,['class'=>'form-control','placeholder'=>'write-something-like-this'])}}
    </div>
    <div class="form-group">
      {{Form::label('image','Image')}}
      {{Form::text('image',$blog->image_url,['id'=>'thumbnail','class'=>'form-control','placeholder'=>'image-url'])}}
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">Choose</a>
      </span>
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{ Form::textarea('body',$blog->body,['class'=>'form-control','placeholder'=>'Body Text','required'=>'required']) }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    <a href="/dashboard/blogs" class="btn btn-danger">Cancel</a>
    {!! Form::close() !!}
  </div>
</section>
<!-- scripts for ckeditor file manager -->
<script>
var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>
<!-- CKEditor init -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
<script>
$('textarea[name=body]').ckeditor({
height: 100,
filebrowserImageBrowseUrl: route_prefix + '?type=Images',
filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: route_prefix + '?type=Files',
filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
});
</script>
<script>
{!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
$('#lfm').filemanager('image', {prefix: route_prefix});
$('#lfm2').filemanager('file', {prefix: route_prefix});
</script>
<script>
$(document).ready(function(){
// Define function to open filemanager window
var lfm = function(options, cb) {
var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
window.SetUrl = cb;
};
});
</script>
@endsection