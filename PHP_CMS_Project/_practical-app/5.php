<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
    $br = "<br>";
    echo rand(1,100).$br;
        
    $string = "This is my string function";
    echo strtoupper($string).$br;
    
    $list = [32,645,324,123,5234,5342,52345,22];
    sort($list);
    print_r($list);
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>