<!DOCTYPE html>
<html>
<head>
	<title>Ajax CRUD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>



<div class="container"><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create Record
</button>
</div>
<div class="container">
 <table class="table table-bordered table-sm">
       <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>City</th>
            <th width="280px">Action</th>
        </tr>
       </thead>
       <tbody id="bodyData">

       </tbody>  
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm">
        	@csrf
        	<div class="form-group">
        		<input type="text" name="name" class="form-control" id="name" placeholder="Name">
        	</div>
        	<div class="form-group">
        		<input type="text" name="city" class="form-control" id="city" placeholder="City">
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save-btn">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){		
    function loadData(){ 
        var url = "{{URL('ajax/reocrd')}}";
        $.ajax({
            url: "{{ url('ajax/record') }}",
            type: "GET",
            dataType: 'json',
            success: function(Result){
                var array = Result.data;
                var i = 0;
                array.forEach( function(array, i) {
                	document.write[array[i].id];
                	i++;
                });

            }
        });

    }
    loadData();


		$('#save-btn').click(function(){
		   var _token = $('input[type=hidden]').val();
		   var name = $('#name').val();
		   var city = $('#city').val();
		   $.ajax({
		   url:"{{ url('ajax/create') }}",	
           type:"get",
           dataType:"json",           
           data:{name:name, city:city},
           success:function(result){
           	$('#myForm').trigger('reset');

             alert(result.message);
            }
        });		   
	});
		
		
	});
</script>
</body>
</html>