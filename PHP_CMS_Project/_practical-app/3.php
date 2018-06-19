<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$br = "<br>";
if(3-1==0){
    echo "I hate PHP!";
} else {
    echo "I love PHP";
};
echo $br;
    
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>