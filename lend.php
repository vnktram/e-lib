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
                       <center> <h2 class="panel-title"><b>LEND BOOK</b></h2></center>
                    </div>
                    <div class="panel-body ">
                    <div class="row">
                    <div class="col-md-4">
                        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                            <fieldset>
                            <br>
                                <div class="input-group ">
  <span class="input-group-addon"><i class="fa fa-book fa-fw "></i></span>
  <input class="form-control" name="book_no" type="number" placeholder="Book Number">

  
</div>
            <br>          <div class="input-group ">
  <span class="input-group-addon"><i class="fa fa-user fa-fw "></i></span>
<input class="form-control" name="rollno" type="text" placeholder="Roll Number">

  
</div>
<br>          <div class="input-group ">
  <span class="input-group-addon"><i class="fa fa-calendar-o fa-fw "></i></span>
<input class="form-control" name="dt" type="text" disabled="" placeholder="<?php date_default_timezone_set("Asia/Kolkata"); $dat=getdate();
					$dte=$dat['mday']."/".$dat['mon']."/".$dat['year']; echo $dte;?>">

  
</div>


      
                                <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <INPUT class="btn btn-outline btn-info btn-lg  btn-block" TYPE='submit' Value="Submit" NAME='sub1'>
                            </fieldset>
                        </form>
                        </div>
                       





	
			<?php
				

					
					
				if(isset($_POST['book_no'])&&isset($_POST['rollno']) )
				{
					date_default_timezone_set("Asia/Kolkata");
					$bno= $_POST['book_no'];
					$rno= $_POST['rollno'];
					$date =getdate();
					$dt=$date['mday']."/".$date['mon']."/".$date['year'];
					
					$timestamp=time();
					$date=strtotime('+30 day', $timestamp);
					$date=getdate($date);
					$time=$date['mday']."/".$date['mon']."/".$date['year'];
					
					$db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
					$q=$db->query(' SELECT * FROM book_count WHERE book_token ='.$bno );
					$r = $q->fetch();
					
						
                    	
                    	$bid=$r['b_id'];
                  
                    	$qry1=$db->query(' SELECT * FROM book_count WHERE b_id='.$bid ); 
					
					$row1 = $qry1->fetchAll();
					
					$rows1 = count($row1);
						
                    	
                    	$rno='"'.$rno.'"';
                    	
					$qry=$db->query(' SELECT * FROM users WHERE rollno='.$rno ); 
					
					$row = $qry->fetch();
					
						$uid=$row['u_id'];
						//echo $uid;
					$usr=$db->query(' SELECT * FROM transactions WHERE u_id='.$uid ); 
					$ret=$usr->fetchAll();
					$cht=count($ret);
					if($cht==0)
					{	
					try
					{
						$qry=$db->query(' SELECT * FROM transactions WHERE book_token='.$bno ); 
						
					$row = $qry->fetchAll();
					
					$rows = count($row);

					if($rows==0)
					{
						$n='0';
						$stmt=$db->prepare(" INSERT INTO transactions (u_id, b_id, borrowtime, returntime, status, book_token) VALUES (?, ?, ?, ?, ?, ? )");
						$stmt->execute(array( $uid,  $bid,  $dt,  $time,  $n,  $bno));
						//echo $stmt->rowCount();
						//echo "<br>Entry Successfully Updated.<br>";
						//echo $bid;
				$final=$db->query(' SELECT * FROM books where b_id='.$bid);
					$inf=$final->fetch();
						$qry2=$db->query(' SELECT * FROM transactions WHERE b_id='.$bid ); 
					
					$row2 = $qry2->fetchAll();
					
					$rows2 = count($row2);
					$count=$rows1-$rows2;
						echo "<div class='col-md-8'>
						 <div class=' alert alert-success alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h2 class='text-center'><br>Book Name: ".$inf['book_name']."<br>
						Author : ".$inf['author']."<br> Total Number of Copies: ".$rows1."<br>Number of Copies Left : ".$count."</h2>
                                
                            </div>
                            </div>";
						
						

						
					}else
					{
						echo "<br><br><div class='col-md-8'>
						 <div class=' alert alert-warning alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h3 class='text-center'>Please Check the Book number. <br> The entered Book number has been issued already.</h3>
                                
                            </div>
                            </div>";
					}

					}	
					catch(PDOException $ex) 
					{
						echo "<br> Check the Book Number.<br>";
					}	
					}else{
						echo "<br><br><div class='col-md-8'>
						 <div class=' alert alert-warning alert-dismissable' tabindex='-1'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h3 class='text-center'>Student already has pending transaction.<br> Please verify in <a href='stat.php'>user status.</a> </h3>
                                
                            </div>
                            </div>";

					}			



					
				}	
				?>
				
			 </div></div></div></div></div></div>
	</body>
</html>


