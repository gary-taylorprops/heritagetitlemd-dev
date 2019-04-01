@extends('layouts.admin')

@section('title', 'Edit Location | Dashboard | Heritage Title, Ltd.')

@section('content')

<section id="create-post">
  <div class="container"> 
    <h1>New Location</h1>
    {!! Form::open(['action' => ['HTLocationsController@update',$location->id],'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',$location->name,['class'=>'form-control','placeholder'=>'','required'=>'required'])}}
      </div>
      <div class="form-group">
        {{Form::label('address1','Address 1')}}
        {{Form::text('address1',$location->address1,['class'=>'form-control','placeholder'=>'','required'=>'required'])}}
      </div>
      <div class="form-group">
        {{Form::label('address2','Address 2')}}
        {{Form::text('address2',$location->address2,['class'=>'form-control','placeholder'=>''])}}
      </div>
      <div class="form-group">
        {{Form::label('city','City')}}
        {{Form::text('city',$location->city,['class'=>'form-control','placeholder'=>'','required'=>'required'])}}
      </div>
      <div class="form-group">
        {{Form::label('state','State')}}
        {{Form::text('state',$location->state,['class'=>'form-control','placeholder'=>'','required'=>'required','maxlength'=>'2'])}}
      </div>
      <div class="form-group">
        {{Form::label('zip','Zip')}}
        {{Form::text('zip',$location->zip,['class'=>'form-control','placeholder'=>'','required'=>'required','maxlength'=>'5'])}}
      </div>
      <div class="form-group">
        {{Form::label('map_url','Location URL - Google the location, bring it up on the map, copy/paste the url of the map location in field below.')}}
        {{Form::text('map_url',$location->map_url,['class'=>'form-control','placeholder'=>'','required'=>'required'])}}
      </div>
      {{Form::hidden('_method','PUT')}}
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      <a href="/dashboard/ht-locations" class="btn btn-danger">Cancel</a>
    {!! Form::close() !!}
  </div>
</section>
@endsection