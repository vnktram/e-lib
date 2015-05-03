<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NIT-Py Library</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <h1><a class="navbar-brand" style="font-size:1em;" href="#">NIT-Py Library</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style="border:1px block solid ;">

       
    <div class="row">
            <div class="col-lg-9">
                <h1 class="page-header"><?php echo $_GET['dept']?> Book Inventory</h1>
            </div>
            <br><br><br>
            <div class="col-lg-3"> 
            <div class="form-group">
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <select name="dept" class="btn-outline btn-default form-control"  onchange="this.form.submit()">
                <option value="" disabled="disabled" selected="selected">Please select a stream</option>
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="ECE">ECE</option>
  <option value="">ALL</option>
</select> 
</form>
</div>
            </div>
            </div>
                <?php
                /* Here you hav to set $var as either CSE ECE, EEE or ALL based on a dropdwon menu
                    

                 */
                
                $var="%";
                if(isset($_GET['dept']))
                {
                    $var=$var."".$_GET['dept'];
                }
                $count=0;
                $db = new PDO('mysql:host=localhost;dbname=library;', 'root', '');
                foreach($db->query(' SELECT * FROM books WHERE dept LIKE "'.$var.'"') as $row) 
                    {
                       
                        echo "  <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
            <div class='panel  panel-primary'>
            <div class='panel-heading'>
                
                    <img class='img-responsive' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0icmdiKDExNCwgMTkyLCA2OCkiICAvPjxyZWN0IHg9IjAuMCIgeT0iMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjEwLjAiIHk9IjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA3MjAwMDAwMDAwMDAwMDAxIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSIyMC4wIiB5PSIwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjY2NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMzAuMCIgeT0iMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjQwLjAiIHk9IjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSI1MC4wIiB5PSIwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMC4wIiB5PSIxMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMTA2NjY2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjEwLjAiIHk9IjEwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wODA2NjY2NjY2NjY2NjY2NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMjAuMCIgeT0iMTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMzAuMCIgeT0iMTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNDAuMCIgeT0iMTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjEwNjY2NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSI1MC4wIiB5PSIxMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDIiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjAuMCIgeT0iMjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMTAuMCIgeT0iMjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMjAuMCIgeT0iMjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjExNTMzMzMzMzMzMzMzMzM0IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSIzMC4wIiB5PSIyMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTE1MzMzMzMzMzMzMzMzMzQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjQwLjAiIHk9IjIwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wMiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNTAuMCIgeT0iMjAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMC4wIiB5PSIzMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjEwLjAiIHk9IjMwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjIwLjAiIHk9IjMwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4wOTgiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjMwLjAiIHk9IjMwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiNkZGQiIGZpbGwtb3BhY2l0eT0iMC4wNzIwMDAwMDAwMDAwMDAwMSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNDAuMCIgeT0iMzAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjEzMjY2NjY2NjY2NjY2NjY1IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSI1MC4wIiB5PSIzMC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMDgwNjY2NjY2NjY2NjY2NjYiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjAuMCIgeT0iNDAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA5OCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMTAuMCIgeT0iNDAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA4MDY2NjY2NjY2NjY2NjY2IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSIyMC4wIiB5PSI0MC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjZGRkIiBmaWxsLW9wYWNpdHk9IjAuMDU0NjY2NjY2NjY2NjY2NjciIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjMwLjAiIHk9IjQwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMzI2NjY2NjY2NjY2NjY2NSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNDAuMCIgeT0iNDAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA1NDY2NjY2NjY2NjY2NjY3IiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSI1MC4wIiB5PSI0MC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjY2NjUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjAuMCIgeT0iNTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iMTAuMCIgeT0iNTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iI2RkZCIgZmlsbC1vcGFjaXR5PSIwLjA4OTMzMzMzMzMzMzMzMzMzIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIwLjAyIiAgLz48cmVjdCB4PSIyMC4wIiB5PSI1MC4wIiB3aWR0aD0iMTAuMCIgaGVpZ2h0PSIxMC4wIiBmaWxsPSIjMjIyIiBmaWxsLW9wYWNpdHk9IjAuMTMyNjY2NjY2NjY2NjY2NjUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDIiICAvPjxyZWN0IHg9IjMwLjAiIHk9IjUwLjAiIHdpZHRoPSIxMC4wIiBoZWlnaHQ9IjEwLjAiIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iMC4xMTUzMzMzMzMzMzMzMzMzNCIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNDAuMCIgeT0iNTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjAyODY2NjY2NjY2NjY2NjY2NyIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PHJlY3QgeD0iNTAuMCIgeT0iNTAuMCIgd2lkdGg9IjEwLjAiIGhlaWdodD0iMTAuMCIgZmlsbD0iIzIyMiIgZmlsbC1vcGFjaXR5PSIwLjA0NiIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgIC8+PC9zdmc+' style='background-repeat:repeat;' alt=''>
                
            </div>
             <div class='panel-footer'>
                     <b> ".$row['book_name']."</b><br><i>".$row['author']."</i>
            </div>
            </div>
           
            </div>
            ";
            
                    }
                ?>
            
           
            
        </div>
       
       

      
    
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
