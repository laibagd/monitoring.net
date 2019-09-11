<?php
 include 'Car.php';
 $automobilis = new Car();
 $automobilis ->spalva='raudona';
 $automobilis ->greitis='50km/h';

 echo $automobilis->gautisSpalva()."<br>";

 $automobilis->vaziuoti();
 $automobilis->vaziuoti();



echo  "<br> Rida", $automobilis-> gautiRida();