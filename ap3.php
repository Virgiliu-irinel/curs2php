<?php
// $x=218;
// $y=158;
// if ($x > $y){
//     echo "Numarul mai mare este $x";
// }
// else {
//     echo "numarul mai mic este $y";
// }

// $x =42;
// $y =237;
// if($x>$y){
//     echo "Numarul mai mare este $x";
// }
// else {
//    echo "numarul mai mare este $y";
// } 

// $x =8;
// if ($x % 2 ==0){
//     echo "DA";
// }
// else {
//     echo "NU";
// }

// $x=3;
// if($x%2==0){
//     echo "DA";
// }
// else {
//     echo "NU";
// }

// $x=rand(1,30);

// if ($x%2==0){
//     echo "Numarul este par";
// }
// else {
//     echo "Numarul este impar";
// }

// $x=8;
// $y=15;
// if($x<$y){
//     echo "Numarul mai mic este $x";
// }
// else {
//     echo "Numarul mai mic este $y";
// }

// $x=8;
// $y=15;
// $z=5;
// if (($x<$y) && ($x<$z)){
//     echo "$x este cel mai mic";
// }
// elseif (($y<$x)&&($y<$z)){
//     echo "$y este cel mai mic";
// }
// else {
//     echo "$z este cel mai mic";
// }

// $x=rand(1,30);
// $y=rand(2,15);

// if ($x>$y){
//     echo "Numarul mai mare este $x";
    
// }
// else {
//     echo "Numarul mai mare este $y";
// }

// $a=rand(15,35);
// $b=rand(15,35);
// $c=rand(15,35);
// if($a+$b==$c or $a+$c==$b or $b+$c==$a){
//     echo "copii au greutatile $a,$b,$c. se pot aseza 2 la un capat 1 la un capat";
// }
// elseif($a==$b or $a==$c or $b==$c){
//     echo "copii au greutatile $a,$b,$c si se pot aseza 1 la un capat si 1 la celalat  capat in balansoar";
// }
// else{
//     echo "copii au greutatile $a,$b,$c si nu se pot aseza in balansoar in echilibru";
// }


// $v=rand(10,50);
// $i=rand(150,180);
// $s=rand(1,2);

// $g=50+0.75*($i-150)+($v-20)/4;
// if ($s==1){
//     echo "Pentru baieti de varsta $v,inaltime $i,greutatea ideala este: $g";
// }
// else{
//     $g = $g * 0.9;
//     echo "pentru fete de varsta $v,inaltime $i greutatea ideala este: $g";
// }

// $zi=date("l");
// echo "$zi"


// $x=rand(1,10);
// switch($x){
//     case 2:
//     case 4:
//     case 6:
//     case 8:
//     case 10;
//         echo "Numarul $x este par";
//     break;
//     default:
//         echo "Numarul $x este impar";
// }

// $nota=rand(1,10);
// switch($nota){
//     case 1:
//     case 2:
//     case 3:
//     case 4:
//     echo " Nota $nota Insuficient";
//     break;
//     case 5:
//     case 6:
//     echo "Nota $nota Suficient";
//     break;
//     case 7:
//     case 8:
//     echo "Nota $nota Bun";
//     break;
//     case 9:
//     case 10:
//         echo "Nota $nota Bursier";
//     break;

// }


// $zi=rand(1,7);

// switch($zi){
// case 1:
//     echo "Azi este Luni";
//     break;
// case 2:
//     echo "Azi este Marti";
//     break;
// case 3:
//     echo "Azi este Miercuri";
//     break;
// case 4:
//         echo "Azi este Joi";
//     break;
// case 5:
//         echo "Azi este Vineri";
//     break;
// case 6:
//         echo "Azi este Sambata";
//     break;
// case 7:
//         echo "Azi este Duminica";
//     break; 


// }

// $i=0;
// while($i<=15){
//     echo $i;
//     echo "<br />";
//     $i++;
// }

// $j=0;
// do {
//     echo $j;
//     echo "<br />";
//     $j++;
// }   
// while($j<=15);



// for ($k=0;$k<=15;$k++){
// echo $k;
// echo "<br />";
// }


// for($i=0;$i<=15;$i++){
//     if ($i%2==0){
//     continue;
//     }
//     echo $i. ',' ;    
// }


// $combustibil=rand(0,55);

// if ($combustibil<10){
//     echo "Va rog sa alimentati";
// }
// else{
//     echo "Conduceti prudent";
// }

// $arr=array(12,4,11,5,10,2,13,8,6,15,0,3,7,1,9,14,16,150,1.5);
// sort($arr);
// $x=count($arr);
// for($y=0;$y<$x;$y++){
//     echo $arr[$y];
// }

// $arr = array(12,4,11,5,10,2,13,8,6,15,0,3,7,1,9,14,16,25);
//     //print_r($arr);
//     for($i=0;$i<=15;$i++){
//         $aux = $arr[$i];
//         $j = $i-1;
//         while($j>=0 && $arr[$j]>$aux ){
//             $arr[$j+1] = $arr[$j];
//             $j = $j-1;
            
//         }
//         $arr[$j+1] = $aux;
//     }
    
//     print_r($arr);


// factorialul unui nr n!=1*2*3*....*n
// $n=10;
// $p=1;
// $i=1;
// while ($i<=$n){
//     $p=$p*$i;
//     $i=$i+1;
// }
// echo $p;

// $n =rand(1, 15);
// $p = 1;
// for($i = 1; $i <= $n; $i++){

//     $p = $p * $i;
// }
// echo "$n!=$p";

// $n=1859;
// $max=-1;
// while($n>0){
//     $c=n 
// }

//echo 2876 % 1;
//echo 2876 / 10

// $n = 752;
// $max = -1;

// while($n>0){
//     $c=$n%10;
//     if($max<$c){
//         $max=$c;
        
//     }
//     $n=$n/10;
    
// }
// echo $max;









?>
