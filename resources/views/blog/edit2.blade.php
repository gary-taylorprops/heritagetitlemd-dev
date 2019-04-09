@extends('layouts.admin')

@section('title', 'Edit Post | Heritage Title, Ltd.')

@section('content')

<section id="create-post">
    <div class="container">
      <h1 class="page-header">Integration Demo Page</h1>
      <div class="row">
        <div class="col-md-12">
          <h2>CKEditor</h2>
          <textarea name="ce" class="form-control"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2>Standalone Image Button</h2>
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">
          <h2>Standalone File Button</h2>
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail2" class="form-control" type="text" name="filepath">
          </div>
          <img id="holder2" style="margin-top:15px;max-height:100px;">
        </div>
      </div>
    </div>

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