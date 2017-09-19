@extends('layouts.admin')


@section("content")

<div class="container-fluid">
	<div class="wrapper">
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3">
				
				<div class="panel panel-primary">
			      	<div class="panel-heading">
			      		All landing pages
			      	</div>
			      	<div class="panel-body">
			      		<table class="table">
			      			<thead>
			      				<tr>
									<th>ID</th>
				      				<th>Name</th>
				      				<th>Title</th>
				      				<th>Actions</th>
				      			</tr>
			      			</thead>
			      			<tbody>
			      				@foreach($landingPages as $landing)
				      				<tr>
										<td>{{ $landing->id }}</td>
				      					<td>{{ $landing->name }}</td>
				      					<td>{{ $landing->title }}</td>
				      					<td style="width: 150px;">
											<a href="{{url("/admin/landings/edit/" .$landing->name)}}" data-toggle="tooltip" data-placement="bottom" title="EDIT" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

											<form class="action-buttons" method="POST" action="{{url("/admin/landings/delete/" .$landing->name)}}">
												{{ csrf_field() }}
												<input type="hidden" name="_method" value="DELETE" />
												<button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash-o"></i></button>
											</form>
										</td>
				      				</tr>
			      				@endforeach
			      			</tbody>
			      		</table>
						<hr>
			      		<div class="text-center">
			      			<a href="/admin/landings/create" class="btn btn-primary">Create a new Landing Page</a>
			      		</div>
			      	</div>
			    </div>
				<a href="/admin/sources">Go to Sources &raquo;</a>
			</div>


		</div>
	</div>
</div>
@endsection


