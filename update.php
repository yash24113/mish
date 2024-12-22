<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="phone">phone</label>
		     <input type="phone" 
		           class="form-control" 
		           id="phone" 
		           name="phone" 
		           value="<?=$row['phone'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="address">address</label>
		     <input type="text" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?=$row['address'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="location">location</label>
		     <input type="text" 
		           class="form-control" 
		           id="location" 
		           name="location" 
		           value="<?=$row['location'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="number">guests</label>
		     <input type="guests" 
		           class="form-control" 
		           id="guests" 
		           name="guests" 
		           value="<?=$row['guests'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="date">arrivals</label>
		     <input type="arrivals" 
		           class="form-control" 
		           id="arrivals" 
		           name="arrivals" 
		           value="<?=$row['arrivals'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="leaving">leaving</label>
		     <input type="date" 
		           class="form-control" 
		           id="leaving" 
		           name="leaving" 
		           value="<?=$row['leaving'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>