<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
        
    $connect = mysqli_connect('localhost','root', '','cmsclass');
    if(!$connect){
        die("database connection failed!");
    }
    
    $query = "SELECT * FROM lesson7test";
    $result = mysqli_query($connect, $query);
    if(!$result){
        die("Query Failed!");
    }
	
        
    while($row = mysqli_fetch_assoc($result)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
