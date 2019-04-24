 
 
 /* question 1 */ <br />
<?php
$a=5;
$b=3;
echo min ($a,$b) . '<br />';
?>


/* question 2 */ <br />
<?php
$a=3;   
$b=5;     
$c=4;    
echo min ($a,$b,$c). '<br />'; 
?>

/* question 3 */ <br />
<?php
 $min = 1;
 $max = 100;
 echo mt_rand($min,$max). '<br />';
?>

/* question 4 */ <br />
<?php
 $min = 5;
 $max = 100;
 echo mt_rand($min,$max). '<br />';
?>

/* question 5 */ <br />
<?php
$a=5;
$b=3;
echo ($a+$b). '<br />';
?>

/* question 6 */ <br />
<?php
$gcd = gmp_gcd("2", "7");
echo gmp_strval($gcd) . "\n". '<br />';
?>

/* question 7 */ <br />
//<?php
$min=0;
$max=100;
$x=0;
for ($x = 0; $x < 50; $x+=1)
{    echo "je vais faire du bon visuel". '<br />';
}
for ($x = 100; $x > 50; $x-=1)
{    echo "je suis un pioupiou". '<br />';
}
?>

/* question 8 */ <br />
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <=30; $nombre_de_lignes++)
{
    echo  $nombre_de_lignes .'   bonjour pioupiou' . '<br />';
}
?>

/* question 9 */ <br />
<?php
$min=0;
$max=50;
$x=0;
for ($x = 0; $x < 50; $x+=1)
{    echo $x . "petite perruche" . '<br />';
}
?>

/* question 10 */ <br />
<?php
$x=0;
if ($x==1)
echo "(AAAA)";
elseif ($x==2)
echo "(BBBB)";
elseif ($x==3)
echo "(CCCC)";
elseif ($x==4)
echo "(DDDD)";
else {
    echo "je suis une quiche" . '<br />';
}
?>

/* question 11 */ <br />
<?php
if ($x == 0) {
    echo "je suis une quiche" . '<br />';
} elseif ($x == 1) {
    echo "(AAAA)";
} elseif ($x == 2) {
    echo "(BBBB)";
}elseif ($x == 3)  {
    echo "(CCCC)";
}elseif ($x == 4)  {
    echo "(DDDD)";
}

switch ($x) {
    case 0:
        echo "x égal 0" . '<br />';
        break;
    case 1:
        echo "x égal 1";
        break;
    case 2:
        echo "x égal 2";
        break;
    case 3:
        echo "x égal 3";
        break;
    case 4:
        echo "x égal 4";
        break;
}
?>

/* question 12 */ <br />
<?php
$x=rand(1,2);
if($x==1){
   include 'page1.html';
}   
else($x==2){
   include 'page2.html'
}
?>  

 /* question 13 */ <br />
 <?php
 $z = array();
for($x = 0; $x < 10; $x++){
    $y = rand(1,100);
    array_push($z, $y);
    echo $z[$x] . '<br />';
  }
?>

 /* question 14 */ <br />
 <?php
    $tableau = array('1','2','3','4', '5','6','7','8','9','10');
    rsort($tableau);
    print_r($tableau) . '<br />';
    ?>

/* question 15 */ <br />
<?php  
	 
?>