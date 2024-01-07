@extends('admin.layout')

@section('content')

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2 mt-5" >

		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white" style="margin-left:100px ">


			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">ID</th>
						<th data-priority="2">Name</th>
						<th data-priority="3">Email</th>
						<th data-priority="4">Phone</th>
						<th data-priority="5">Gender</th>
						<th data-priority="6">Role</th>
						<th data-priority="7">Status</th>
						<th data-priority="7">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->phone}}</td>
						<td>{{$user->gender}}</td>
						<td>{{$user->role}}</td>
						<td>
							@if (!$user->status)
							<span class="bg-danger text-white">Rejected</span>
							<a href="{{route('changeStatus',['id'=>$user->id,'status'=>'accept'])}}">Accept</a>
							@else
							<span class="bg-success text-white">Accepted</span>
							<a href="{{route('changeStatus',['id'=>$user->id,'status'=>'rejcet'])}}">Reject</a>
							@endif
						</td>
						<td><a href="{{ route('edit', ['id' => $user->id]) }}">Edit</a></td>
					</tr>
					@endforeach

					
				</tbody>

			</table>


		</div>
		<!--/Card-->


	</div>
	<!--/container-->





	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>

</body>

@endsection