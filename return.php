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
                       <center> <h2 class="panel-title"><b>Return Book</b></h2></center>
                    </div>
                    <div class="panel-body ">
                    <div class="row">
                    <div class="col-md-4">
                        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                            <fieldset>
                            <br>
                                <div class="input-group ">
  <span class="input-group-addon"><i class="fa fa-book fa-fw"></i></span>
  <input class="form-control" name="rollno" type="text" placeholder="Book Number">
</div>
      
                                <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <INPUT class="btn btn-outline btn-success btn-lg  btn-block" TYPE='submit' Value="Submit" NAME='sub1'>
                            </fieldset>
                        </form>
                        </div>
                       
                   
	
			<?php
				/* Here you hav to set $rollno as rollno of student obtained from the input */
				if(isset($_POST['rollno']))
				{
					
					
					$bno=$_POST['rollno'];
					
						$rows=0;				
					$db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
					$qry=$db->query('SELECT b_id FROM book_count WHERE book_token='.$bno);
					$row=$qry->fetch();
					$bid=$row['b_id'];
					
					$q=$db->query('SELECT * FROM transactions WHERE book_token='.$bno );
					$r = $q->fetchAll();
					
					$rows = count($r);
					
					
					if($rows!=0)
					{
						
						$sqlqry=' DELETE FROM transactions WHERE book_token='.$bno.' and b_id='.$bid;
						
						$q=$db->query($sqlqry);
						$final=$db->query(' SELECT * FROM book_count where b_id='.$bid);
					$inf=$final->fetchAll();
					$rows1=count($inf);
						$qry2=$db->query(' SELECT * FROM transactions WHERE b_id='.$bid ); 
					
					$row2 = $qry2->fetchAll();
					
					$rows2 = count($row2);
					$count=$rows1-$rows2;
					$final=$db->query(' SELECT * FROM books where b_id='.$bid);
					$inf=$final->fetch();
						echo "<div class='col-md-8 text-center'>
						 <div class=' alert alert-success alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h3 class='text-center'>Book Name: ".$inf['book_name']."<br>
						Author : ".$inf['author']."<br> Total Number of Copies: ".$rows1."<br>Number of Copies Left : ".$count."</h3>";

						

					
					}
					else
					{
						echo "  <br><div class='col-md-8'>
						 <div class=' alert alert-danger alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h3 class='text-center'>Verify book number. </h3>
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


