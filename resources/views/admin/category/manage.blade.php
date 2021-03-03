@extends('admin.master')
@section('content')
		<div>
			<h3 class="text-center text-success">{{Session::get('message')}}</h3>
		</div>
<table class="table table-hover table-bordered">
<thead>
	<tr>
		<th>ID</th>
		<th>CategoryName</th>
		<th>CategoryStatus</th>
		<th>CategoryDescription</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	@foreach($categories as $category)
	<tr>
	<th scope="row">{{$category->id}}</th>
	<td>{{$category->CategoryName}}</td>
	<td>{{$category->CategoryStatus}}</td>
	<td>{{$category->CategoryDescription}}</td>
	<td>
		<a href="{{url('/edit/category/'.$category->id)}}" class="btn btn-success">
			<span class="glyphicon glyphicon-edit"></span>
		</a>
		<a href="{{url('/delet/category/'.$category->id)}}" class="btn btn-danger">
			<span class="glyphicon glyphicon-trash"></span>
		</a>
	</td>
	</tr>
	@endforeach()
</tbody>
</table>
@endsection()