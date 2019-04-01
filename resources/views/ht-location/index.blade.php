@extends('layouts.admin')
@section('title', 'View All Locations | Dashboard | Heritage Title, Ltd.')
@section('content')
<section id="locations">
  <div class="container">
    <div class="row" style="align-items: baseline;">
      <div class="col-md-6"><a href="/ht-locations/create" class="btn btn-primary" style="margin: 2em;">Create Location</a></div>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @if(count($locations) > 0)
        @foreach($locations as $location)
        <tr>
          <th scope="row">{{ $location->id }}</th>
          <td>{{ $location->name }}</td>
          <td>{{ $location->address1 }}
          	{{ $location->address2 }}<br>
          	{{ $location->city }}, {{ $location->state }} {{ $location->zip }}<br>
          </td>
          <td><a href="/ht-locations/{{$location->id}}/edit" class="btn btn-primary">Edit</a></td>
          <td><a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal">Delete</td>
        </tr>
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
              <div class="modal-body">You will not be able to recover location if you delete.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                {!! Form::open(['action'=>['HTLocationsController@destroy',$location->id,'method'=>'POST','class'=>'pull-right']]) !!}
                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </tbody>
    </table>
    @else
    <tr>
      <th>
        <td>No Locations Found</td>
        <td></td>
        <td></td>
        <td></td>
      </th>
    </tr>
    @endif

  </div>
</section>

@endsection