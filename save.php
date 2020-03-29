<?php 

 
include 'dbcon.php';

if(isset($_POST['submit'])){

	$username =$_POST['username'];
    $email    =$_POST['email'];
	$mobile   =$_POST['mobile'];

	$symp     =$_POST['coronasym'];
	$message   =$_POST['message'];


	$chk="";

	foreach ($symp as $chk1) {

		$chk .=$chk1.",";
	}

	$insertquery = "insert into coranacase( username, email, mobile, symp, message) VALUES ('$username','$email',
	 '$mobile','$chk','$message')";

	$query = mysqli_query($con,$insertquery);

	if($query){

      ?>		 
      <script>
     	// alert("Update successful");
     	
          location.replace("index.php")

       </script> 
        <?php
  }else{
 	?>
 	<script>
 		// alert("No inserted");
 	</script>
 	<?php
 }


}