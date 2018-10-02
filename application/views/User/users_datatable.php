<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
<style media="screen">
.glyphicon {
	color:#7CB13F!important;
}
.panel-body {
	padding: 45px!important;
}
.panel-info > .panel-heading {
	background-color: #7CB13F!important;
	border-color: #7CB13F!important;
}
</style>
</head>
<body>


<div class="container">
	<div class="row">
  	<div class="col-lg-12 margin-tb">
  	  <div class="pull-left">
  	    <h2>Datatable</h2>
  	  </div>
			<div class="clearfix"></div>
  	  <div class="pull-right">
  	    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item"> Create User</button>
  	  </div>
  	</div>
</div>
	<table id="item-list" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
        <th>Age</th>
        <th>Mobile</th>
				<th width="180px">Action</th>
			</tr>
		</thead>
		<tbody>


		</tbody>
	</table>
	<!-- Create Item Model -->
	<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Create User</h4>
      </div>
      <div class="modal-body">
            <form data-toggle="validator" id="add_user" action="" name="add_user">
							<div class="form-group">
									<div class="input-group">
											<div class="input-group-addon iga1">
													<span class="glyphicon glyphicon-user"></span>
											</div>
											<input type="text" class="form-control" placeholder="Enter User Name" name="user_name" data-error="Please enter UserName." required autofocus>
									</div>
									<div class="help-block with-errors"></div>
							</div>
								<div class="form-group">
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-lock"></span>
												</div>
												<input type="password" class="form-control" placeholder="Enter Password" name="user_password" value="" data-error="Please enter UserName." required>
										</div>
										<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-envelope"></span>
												</div>
												<input type="email" class="form-control" placeholder="Enter E-Mail" name="user_email" data-error="Please enter UserName." required autofocus>
										</div>
										<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-heart-empty"></span>
												</div>
												<input type="number" class="form-control" placeholder="Enter Age" name="user_age" value="">
										</div>
										<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-phone"></span>
												</div>
												<input type="number" class="form-control" placeholder="Enter Mobile_No" name="user_mobile" value="" data-error="Please enter description." required>
										</div>
										<div class="help-block with-errors"></div>
								</div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-success">Submit</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Item Model -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
      </div>
      <div class="modal-body">
            <form data-toggle="validator" action="" method="put">
                <div class="form-group">
                    <label class="control-label" for="title">Email:</label>
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-envelope"></span>
												</div>
												<input type="email" class="form-control" placeholder="Enter E-Mail" name="user_email" data-error="Please enter UserName." required autofocus>
										</div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="title">Age:</label>
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-heart-empty"></span>
												</div>
												<input type="number" class="form-control" placeholder="Enter Age" name="user_age" value="">
										</div>
                    <div class="help-block with-errors"></div>
                </div>
								<div class="form-group">
									<label class="control-label" for="title">Mobile_No:</label>
										<div class="input-group">
												<div class="input-group-addon iga1">
														<span class="glyphicon glyphicon-phone"></span>
												</div>
												<input type="number" class="form-control" placeholder="Enter Mobile_No" name="user_mobile" value="" data-error="Please enter description." required>
										</div>
										<div class="help-block with-errors"></div>
								</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success crud-submit-edit">Update</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- scripts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<!-- DropDown -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
</body>


<script type="text/javascript">

var myTable;

    $(document).ready(function (e) {
			// e.preventDefault();
        BindItemTable();
        PopulateItemsTable();
    });

    function BindItemTable() {
        myTable = $("#item-list").DataTable({
            "deferRender": true,
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "sDom": 'lfrtip'
        });
    }

    function PopulateItemsTable() {
        $.ajax({
            type: 'post',
            url: "<?php echo base_url('user/get_items');?>",
            contentType: "application/json; charset=utf-8",
            // dataType: "json",
            success: function (response) {
							console.log(response);

                var jsonObject = JSON.parse(response);
                var result = jsonObject.map(function (item) {
                    var result = [];
                    result.push(item.Id);
                    result.push(item.Name);
                    result.push(item.Email);
                    result.push(item.Age);
                    result.push(item.Mobile);
                    result.push('<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button>&nbsp;<button class="btn btn-danger remove-item">Delete</button>');
										// result.push('<button class="btn btn-danger remove-item">Delete</button>');l
                    return result;
                });
                myTable.rows.add(result);
                myTable.draw();
            },
            failure: function () {
                $("#item-list").append(" Error when fetching data please contact administrator");
            }
        });
    }
</script>
<script>
  $(function () {

    $('#add_user').on('submit', function (e) {

      // e.preventDefault();

      $.ajax({
        type: 'post',
        url: '<?php echo base_url('user/add_user'); ?>',
        data: $('#add_user').serialize(),
        success: function (msg) {
					if(msg == "OK"){
					  alert('form was submitted');
						PopulateItemsTable();
					}
					else
					alert('Email already exists');
        }
      });

    });

  });

/* Remove Item */
$(function (){
	$("body").on("click",".remove-item",function(){
	    var id = $(this).parent("td").data('id');
	    var c_obj = $(this).parents("tr");
	    $.ajax({
	        dataType: 'json',
	        type:'delete',
	        url: '<?= base_url('user/remove_user');?>' + '/' + id,
	    }).done(function(data){
	        c_obj.remove();
	    });
	});
});
</script>


</html>
