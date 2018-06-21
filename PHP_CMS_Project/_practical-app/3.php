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
    
// This is my if statement
if(3-1==0){
    echo "I hate PHP!";
} elseif(1 != 1){
    echo "you are stupid";
} else {
    echo "I love PHP";
};
echo $br;

// this is my forloop
    
    
    for($i = 0; $i <= 10; $i++){
        echo $i . " ";
        
    };
     echo $br;
// This is my switch Statemnet
    
    $number = 25;
    
switch($number) {
        case 34:
        echo "It is 34";
        break;
        case 23:
        echo "It is 23";
        break;
        case 21:
        echo "It is 21";
        break;
        case 29:
        echo "It is 29";
        break;
        case 25:
        echo "It is 25";
        break;
        
        default:
        echo "We couldn't find anything";
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>