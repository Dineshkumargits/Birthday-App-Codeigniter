<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<h2>Datatable</h2>


	<table id="item-list" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
        <th>Age</th>
        <th>Mobile</th>
			</tr>
		</thead>
		<tbody>


		</tbody>
	</table>
</div>


</body>


<script type="text/javascript">

var myTable;

    $(document).ready(function () {
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
            type: "GET",
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
                    // result.push("");
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


</html>
