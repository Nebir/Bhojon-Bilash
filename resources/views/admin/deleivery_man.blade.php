@extends('layouts.admin_master')

@section('title')
    Deliverer List
@endsection

@section('nav-links')
	<div class="collapse navbar-collapse" id="main-nav-collapse">
        <ul class="nav navbar-nav navbar-right text-uppercase">
            <li>
                <a href="{{ route('orderList') }}">Order List</a>
            </li>
            <li>
                <a href="{{ route('blacklist') }}">Blacklist</a>
            </li>
            <li>
                <a href="{{ route('pendinglist') }}">Pendinglist</a>
            </li>
            <li class="active">
                <a href="{{ route('deliverer') }}">Deliverers</a>
            </li>
            <li>
                <a href="{{ route('restaurantStatistics') }}">Restaurants Overview</a>
            </li>
        </ul>
    </div><!-- nav links -->
@endsection

@section('content')

	<div class="container">
		<h1 class="text-center">All Deliverers in your service</h1>

	    <table class="table table-stripped table-bordered text-center">
	    	<tr>
	    		<th>Name</th>
	    		<th>Contact Number</th>
	    		<th>Covering Area</th>
	    	</tr>
	    	@foreach($delivererlists as $delivererlist)
		    	<tr>
		    		<td>{{ $delivererlist->name }}</td>
		    		<td>{{ $delivererlist->contact }}</td>
		    		<td>{{ $delivererlist->delivering_area }}</td>
		    	</tr>
		    @endforeach
	    </table>
	</div>
@endsection