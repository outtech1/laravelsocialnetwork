@extends('templates.default')

@section('content')
	<div class="row">
	    <div class="col-lg-5">
	    	@include('user.partials.userblock')
	    	<hr>
	        <!-- User information and statuses -->
	    </div>
	    <div class="col-lg-4 col-lg-offset-3">
	        <!-- Friends, friend requests -->
	    </div>
	</div>
@stop