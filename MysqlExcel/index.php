<?php  require 'db_Connect.php';?>
<?php  require 'record_read.php';?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<div class="container">	
	<h2>Export Data to Excel with PHP and MySQL</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="export_data.php" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Profession</th>	
			<th>Sallary</th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['Name']; ?></td>
			   <td><?php echo $developer ['Age']; ?></td>
			   <td><?php echo $developer ['Profession']; ?></td>   
			   <td><?php echo $developer ['Sallary']; ?></td>  
			   </tr>
			<?php } ?>
		</tbody>
    </table>
</div>