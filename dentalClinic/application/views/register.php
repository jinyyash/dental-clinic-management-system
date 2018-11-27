<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	@import "bourbon";

	body {
	background: #eee !important;
		
}


.wrapper {	
	margin-top: 150px;
  	margin-bottom: 80px;
	
	padding: 0px;
	border-radius: 25px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	width: 200%;
    	padding: 12px;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	resize: vertical;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	width: 200%;
    	padding: 12px;
    	border: 1px solid #ccc;
    	border-radius: 4px;
    	resize: vertical;
	}
	
}
	
}

</style>
</head>
<body>
<div class="wrapper">

    <form class="form-signin" method="post" action="<?php echo base_url();?>/client/load_appointment_form">       
      <h2 class="form-signin-heading">Please Register Here</h2><br>
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name.."  autofocus="" /><br>
      <label>Gender</label><br>
      <input type="radio" name="gender" value="Male"> Male     <input type="radio" name="gender" value="Female"> Female<br>
      <label>Address</label>
      <input type="text" class="form-control" name="address" placeholder="Enter Address.."  autofocus="" /><br>
      <label>Birthday</label>
      <input type="text" class="form-control" name="bday" placeholder="Enter Birthday.."  autofocus="" /><br>
      <label>Contact Number</label>
      <input type="tel" class="form-control" name="contact" placeholder="Enter Contact Number.."  autofocus="" /><br>
      
        
         
         
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>   
    </form>
  </div>
</body>
</html>