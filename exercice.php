 
 
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
//<?php
$min=0;
$max=100;
$x=0;
for ($x = 0; $x < 50; $x+=1)
{    echo "je vais faire du bon visuel";
}
for ($x = 100; $x > 50; $x-=1)
{    echo "je suis un pioupiou";
}
?>

/* question 8 */
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <=30; $nombre_de_lignes++)
{
    echo  $nombre_de_lignes .'   bonjour pioupiou' . '<br />';
}
?>

/* question 9 */
<?php
$min=0;
$max=50;
$x=0;
for ($x = 0; $x < 50; $x+=1)
{    echo $x . "petite perruche" . '<br />';
}
?>

/* question 10 */
<?php
