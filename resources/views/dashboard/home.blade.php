@extends('layouts.admin')

@section('title', 'Dashboard | Heritage Title, Ltd.')

@section('content')
<div class="container">
	<div class="row">
		<h2>Welcome to your Heritage Title dashboard, {{ $user->name }}!</h1>
		<h5>Currently, this admin dashboard is restricted to only create new blog posts for the Heritage Title website. If you would like to add more functionality, please contact a web developer in IT/Marketing Dept.</h5>
	</div>
</div>
@endsection