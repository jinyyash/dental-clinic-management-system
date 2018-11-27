<!DOCTYPE html>
<html>
<head>
	<title>Admin dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include 'header.php';?>
	<?php include 'sidebar.php';?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<style type="text/css">
		body {font-family: "Lato", sans-serif}
		.mont{
  		font-family: "Montserrat", sans-serif;
		}
		.animate {
		    -webkit-animation: animatezoom 0.6s;
		    animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
		    from {-webkit-transform: scale(0)} 
		    to {-webkit-transform: scale(1)}
		}
		    
		@keyframes animatezoom {
		    from {transform: scale(0)} 
		    to {transform: scale(1)}
		}
	</style>
</head>
<body>
	<div class="w3-content" style="max-width:2000px;margin-top:49px;">
		<div class="sidebar">
			<a class="" onclick=""><img src="<?php echo base_url(); ?>/assets/images/user.png"><i class="fa fa-circle" style="color: green;font-size: 0.8em;padding-right: 5px"></i>Online</a>
			<a class="" href="manage_service"><i class="fa fa-user-md" style="padding-right: 10px"></i>Manage Service </a>
		    
		    
		</div>
		<div class="content" style="background: #f0f0f0;height: 1000px;">
			<h2 class="mont" style="padding: 10px 20px 0;">Manage Services </h2>
			<hr style="border-color: rgba(0,0,0,0.2);">
			<div class="w3-row-padding">
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Add Service</button>
			</div>
			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
					<div class="w3-row-padding">
						<div class="w3-col">
							<h3 class="mont" style="padding: 10px 20px 0;">Add Service</h3>
						</div>
						<div class="w3-col w3-right">
					        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				      	</div>
			      	</div>
			      	<form class="w3-container" action="../Adminser/add_service" method="post">
			      		<div class="w3-row-padding" style="padding-top: 20px;">
			      			<div class="w3-col" style="width:50%;">
			      				<label>Service  ID</label>

			      				<input class="w3-input w3-border w3-round" type="text" name="id" placeholder="" value="">
			      			</div>
			      			<div class="w3-col" style="width:50%;">
			      				<label>Name</label>
			      				<input class="w3-input w3-border w3-round" type="text" name="sname" placeholder="" value="">
			      			</div>

						<div class="w3-col" style="width:50%;">
							<label>Description</label>
							<input class="w3-input w3-border w3-round" type="text" name="des" placeholder="" value="">
						</div>


				<div class="w3-col" style="width:50%;">
					<label>Process Time</label>
					<input class="w3-input w3-border w3-round" type="text" name="pt" placeholder="" value="">
				</div>

			<div class="w3-col" style="width:50%;">
				<label>Price</label>
				<input class="w3-input w3-border w3-round" type="text" name="pri" placeholder="" value="">
			</div>

		<div class="w3-col" style="width:50%;">
			<label>Image</label>
			<input class="w3-input w3-border w3-round" type="image" name="ima" placeholder="" value="">
		</div>
						</div>






				<div class="w3-row-padding" style="padding-top: 20px; padding-bottom: 20px;">
				      		<div class="w3-center">
				      			<button type="submit" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Add Service</button>
				      		</div>
			      		</div>
			      	</form>

				</div>
			</div>
			<div class="w3-row-padding" style="padding-top: 30px;">
				<div class="w3-col" style="width: 7%;padding-top: 5px;">
					<span>Search :</span>
				</div>
				<form method="post" action="../adminser/search_service">
					<div class="w3-col" style="width: 20%">
						<input class="w3-input w3-border w3-round" type="text" name="service_name" placeholder=>
					</div>
					<div class="w3-col" style="width: 20%;padding-left: 20px;">
						<button type="submit" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Search</button>
					</div>

				</form>
			</div>

			<div class="w3-row-padding">
				<table class="w3-table-all" style="margin-top: 20px;">
					<tr>
						<th>Service ID</th>
						<th> Name</th>
						<th>Description</th>
						<th>Process Time</th>
						<th>Price</th>
						<th>Image</th>
						<th></th>


					</tr>
					<?php if (is_array($serData) ){?>
					<?php foreach ($serData as $row) {?>
						<tr>
							<td><?php echo $row->sid; ?></td>
							<td><?php echo $row->name; ?></td>
							<td><?php echo $row->discription; ?></td>
							<td><?php echo $row->process_time; ?></td>
							<td><?php echo $row->price; ?></td>
							<td><?php echo $row->url; ?></td>


							<td>
								<a href="edit_service?id=<?php echo $row->eid?>" class="w3-button w3-green w3-hover-shadow w3-hover-green w3-round">Edit</a>
								<a href="delete_service?id=<?php echo $row->eid?>" class="w3-button w3-red w3-hover-shadow w3-hover-red w3-round">Delete</a>
							</td>
						</tr>	
							
						
					<?php } ?>
					<?php } ?>
				</table>
			</div>
			
		</div>

	</div>
</body>
</html>
