<!DOCTYPE html>
<html>
<head>
	<title>Laravel 8 CRUD</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

	<div class="container">
		<table class="table table-sm">
        <thead>
        <tr>
            <th> # </th>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Action </th>
        </tr>
        </thead>
        <tbody>
        	@foreach($employees as $emp)
        	<tr>
        		<td>{{ $emp->id }}</td>
        		<td>{{ $emp->name }}</td>
        		<td>{{ $emp->email }}</td>
        		<td>{{ $emp->phone }}</td>
        		<td>
        			<a href="{{ url('crud/'.$emp->id.'/edit') }}"><input type="button" value="Edit" class="btn btn-success btn-sm"></a>
        			<a href="{{ url('delete/'.$emp->id) }}"><input type="button" value="Delete" class="btn btn-danger btn-sm"></a>	
        		</td>
        	</tr>
        	@endforeach
        	<tr>
        		<td>#</td>
        		<td><input type="text" name="name" placeholder="Name"></td>
        		<td><input type="text" name="name" placeholder="E-mail"></td>
        		<td><input type="text" name="name" placeholder="phone"></td>
        		<td><input type="submit" value="Create Once" class="btn btn-primary btn-sm"></td>
        	</tr>
        	</tbody>
        </table>
    </div>
    




</body>
</html>