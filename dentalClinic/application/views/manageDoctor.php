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
			<a class="" href="manage_doctor"><i class="fa fa-user-md" style="padding-right: 10px"></i>Manage Doctors </a>
		    
		    
		</div>
		<div class="content" style="background: #f0f0f0;height: 1000px;">
			<h2 class="mont" style="padding: 10px 20px 0;">Manage Doctors</h2>
			<hr style="border-color: rgba(0,0,0,0.2);">
			<div class="w3-row-padding">
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Add Doctor</button>
			</div>
			<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
					<div class="w3-row-padding">
						<div class="w3-col">
							<h3 class="mont" style="padding: 10px 20px 0;">Add Doctor</h2>
						</div>
						<div class="w3-col w3-right">
					        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				      	</div>
			      	</div>
			      	<form class="w3-container" action="../Admin/add_doctor" method="post">
			      		<div class="w3-row-padding" style="padding-top: 20px;">
			      			<div class="w3-col" style="width:50%;">
			      				<label>ID</label>
			      				<input class="w3-input w3-border w3-round" type="text" name="id" placeholder="" value="">
			      			</div>
			      			<div class="w3-col" style="width:50%;">
			      				<label>Doctor Name</label>
			      				<input class="w3-input w3-border w3-round" type="text" name="dname" placeholder="" value="">
			      			</div>
			      		</div>
			      		<div class="w3-row-padding" style="padding-top: 20px;">
			      			<div class="w3-col" style="width:50%;">
			      				<label>Gender</label>
			      				<br>
			      				<select class="w3-round w3-input w3-border" name="gender">
			      					<option value="male">Male</option>
			      					<option value="female">Female</option>
			      				</select>
			      			</div>
			      			<div class="w3-col" style="width:50%;">
			      				<label>Address</label>
			      				<input class="w3-input w3-border w3-round" type="text" name="address" placeholder="" value="">
			      			</div>
			      		</div>
			      		<div class="w3-row-padding" style="padding-top: 20px;">
			      			<div class="w3-col" style="width:50%;">
			      				<label>Contact No</label>
			      				<input class="w3-input w3-border w3-round" type="text" name="cno" placeholder="" value="">
			      			</div>
			      			<div class="w3-col" style="width:50%;">
			      				<label>Email</label>
			      				<input class="w3-input w3-border w3-round" type="Email" name="email" placeholder="" value="">
			      			</div>
			      		</div>
			      		<div class="w3-row-padding" style="padding-top: 20px; padding-bottom: 20px;">
				      		<div class="w3-center">
				      			<button type="submit" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Add Doctor</button>
				      		</div>
			      		</div>
			      	</form>

				</div>
			</div>
			<div class="w3-row-padding" style="padding-top: 30px;">
				<div class="w3-col" style="width: 7%;padding-top: 5px;">
					<span>Search :</span>
				</div>
				<form method="post" action="../admin/search_doctor">
					<div class="w3-col" style="width: 20%">
						<input class="w3-input w3-border w3-round" type="text" name="doc_name" placeholder="Dr. Jeewan" value="">
					</div>
					<div class="w3-col" style="width: 20%;padding-left: 20px;">
						<button type="submit" class="w3-button w3-green w3-round w3-hover-shadow w3-hover-green">Search</button>
					</div>
				</form>
			</div>
			<div class="w3-row-padding">
				<table class="w3-table-all" style="margin-top: 20px;">
					<tr>
						<th>ID</th>
						<th>Doctor Name</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Contact No</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
					<?php if (is_array($docData) ){?>
					<?php foreach ($docData as $row) {?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->name; ?></td>
							<td><?php echo $row->gender; ?></td>
							<td><?php echo $row->address; ?></td>	
							<td><?php echo $row->cno; ?></td>	
							<td><?php echo $row->email; ?></td>
							<td>
								<a href="edit_doctor?id=<?php echo $row->id?>" class="w3-button w3-green w3-hover-shadow w3-hover-green w3-round">Edit</a>
								<a href="delete_doctor?id=<?php echo $row->id?>" class="w3-button w3-red w3-hover-shadow w3-hover-red w3-round">Delete</a>
							</td>
						</tr>	
							
						
					<?php } ?>
					<?php } ?>
				</table>
			</div>
			
		</div>

	</div>
</body>