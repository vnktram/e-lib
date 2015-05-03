<!DOCTYPE html>
<html>
	<head>
		<title>NIT-Py Library</title>
		 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       <center> <h2 class="panel-title"><b>LIBRARY STATISTICS</b></h2></center>
                    </div>
                    <div class="panel-body ">
                    <div class="row">
                    
                       





	
			<?php
				

					
				
					$db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
					$q=$db->query(' SELECT * FROM book_count ');
					$r = $q->fetchAll();
					$total=count($r);
					
						
                    	
                    	
                  
                    	$qry1=$db->query(' SELECT * FROM transactions '); 
					
					$row1 = $qry1->fetchAll();
					
					$out = count($row1);
						
                    $in=$total-$out;	
                    	
					
						echo "<div class='text-center' style='color:green;'><h3>TOTAL : ".$total."</div>";
						echo "<div class='text-center' style='color:orange;'><h3>IN : ".$in."</div>";
						echo "<div class='text-center' style='color:red;'><h3>OUT : ".$out."</div>";

							echo "<div class='center col-md-10 progress'>
  <div class='progress-bar progress-bar-success' aria-valuenow=".$total." style='width: 50%'>
    <span class='sr-only'>35% Complete (success)</span>
  </div>
  <div class='progress-bar progress-bar-warning progress-bar-striped' aria-valuenow=".$in." style='width: 20%'>
    <span class='sr-only'>30% Complete (warning)</span>
  </div>
  <div class='progress-bar progress-bar-danger' style='width: 10%''>
    <span class='sr-only'>20% Complete (danger)</span>
  </div>
</div>";	



					
					
				?>
				
			 </div></div></div></div></div></div>
	</body>
</html>


