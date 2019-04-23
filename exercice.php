 
 
 /* question 1 */
<?php
$a=5;
$b=3;
echo min ($a,$b);
?>


/* question 2 */
<?php
$a=3;   
$b=5;     
$c=4;    
echo min ($a,$b,$c); 
?>

/* question 3 */
<?php
 $min = 1;
 $max = 100;
 echo mt_rand($min,$max);
?>

/* question 4 */
<?php
 $min = 5;
 $max = 100;
 echo mt_rand($min,$max);
?>

/* question 5 */
<?php
$a=5;
$b=3;
echo ($a+$b);
?>

/* question 6 */
<?php
$gcd = gmp_gcd("2", "7");
echo gmp_strval($gcd) . "\n";
?>

/* question 7 */
<?php
$x = "echo rand(1,100)";
function variable() {
    if ($x > 50) {
       echo ("Je vais faire du bon visuel");
    }
    else {
        echo ("Je suis nul");
        return variable();
    }
}

?>
