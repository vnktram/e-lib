<!DOCTYPE html>
<html>

	<head>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<title>NIT-Py Library</title>
	</head>
	<body>
		
	
		
			<div class="container">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       <center> <h2 class="panel-title"><b>User INFO</b></h2></center>
                    </div>
                    <div class="panel-body ">
                    <div class="row">
                    <div class="col-md-4">
                        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                            <fieldset>
                            <br>
                                <div class="input-group ">
  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
  <input class="form-control" name="rollno" type="text" placeholder="Roll Number">
</div>
      
                                <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <INPUT class="btn btn-outline btn-info btn-lg  btn-block" TYPE='submit' Value="Submit" NAME='sub1'>
                            </fieldset>
                        </form>
                        </div>
                       
                   
	
			<?php
				/* Here you hav to set $rollno as rollno of student obtained from the input */
				if(isset($_POST['rollno']))
				{
					
					
				
					
						$rows=0;				
					$db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
					$q=$db->query(' SELECT * FROM transactions WHERE u_id IN(SELECT u_id FROM users WHERE rollno="'.$_POST['rollno'].'")' );
					$r = $q->fetchAll();
					$rows = count($r);

					if($rows!=0)
					{
						echo "
					<div class='col-md-8 table-responsive'>
					<h3> Details of ".$_POST['rollno']."</h3>
					
                                <table class='table table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>Book No.</th>
						<th>Date Borrowed</th>
						<th>Return Date</th>
						<th>Status</th>
                                        </tr>
                                    </thead>
                               
                             
						
						";
						$q=$db->query(' SELECT * FROM transactions WHERE u_id IN(SELECT u_id FROM users WHERE rollno="'.$_POST['rollno'].'")' );
					foreach($q as $r) 
						{
							if($r['status']=="0")
							{
								$stat="UN-Returned";
								echo "<tr><td>".$r['book_token']."</td><td>".$r['borrowtime']."</td> <td>".$r['returntime']."</td><td>".$stat."</td></tr>";
							}
							
						}
						echo " </table>
                            </div> ";
					}
					else
					{
						echo "  <br><div class='col-md-8'>
						 <div class=' alert alert-success alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h3 class='text-center'>No books pending. </h3>
                                <br>
                            </div>
                            </div>";
					}
					
				}	
				?>
				           
                                           </div>
            
        </div>
    </div>
	</div>
	</div>
	</div>		  
     	
	</body>
</html>


