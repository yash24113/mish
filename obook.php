<?php

$con=mysqli_connect("localhost","root","","book_form22");

if(isset($_POST['add_product']))
{
 $name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$view = $_POST['view'];
   

   $insert_query=mysqli_query($conn,"insert into book_form22(id,name,email,phone,address,view)values('','$name','$email','$phone','$address','$view')") or die('query failed');

   
};





?>




 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="csss/style.css">
   <link href="stylee.css" rel="stylesheet" type="text/css" />
   <title>YM Fashion</title>
   <link rel="icon" href="images/y8.jpg">
 <style>
    body {
    
      background-image: url(images/a.jpg); 
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
}
.yash
{
   color:green;
   font-size:50px;
   text-shadow:4px 4px lime;
   
}

h1{
		transition: 0.10s ease;
	}
	h1:hover{
		transform: scale(1.04);
	}

	h2
	{
		color: blue;
		text-shadow: 1px 2px skyblue;
		font-size: 50px;
	}
   </style> 
</head>
<body>
   
<?php

if(isset($message))
{
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'headerr.php'; ?>

<div class="container">



<section class="display-product-table">
		<center><h2> Order Details</h2></center>
   <table>

      <thead>
         <th>name</th>
         <th>email</th>
         <th>phone</th>
         <th>address</th>
         <th>payment mode</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($con, "SELECT * FROM `book_form22`");
            if(mysqli_num_rows($select_products) > 0)
            {
               while($row = mysqli_fetch_assoc($select_products))
               {
         ?>

         <tr style="background: white;">
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['view']; ?></td>
        
         </tr>

         <?php
            };    
            }
            else
            {
               echo "<div class='empty'>no order booked</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit']))
   {
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `book_form22` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0)
      {
         while($fetch_edit = mysqli_fetch_assoc($edit_query))
         {
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?> 

</section>

</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>
<center><td><a href="shop222.php" class="yash"> <h1>BACK</h1></a></td></center>

</body>
</html>