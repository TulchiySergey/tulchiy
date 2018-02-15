<pre>
<?php
$date = $_GET['d']; //date (format: 'N');
$hour = $_GET['h']; //date ('H');

if($date == 7) {// Sunday
    echo 'Пора в церковь';
} elseif ($date <= 5) {//
    echo 'Нужно на работу';
} else {
 echo 'Можно выспаться';
}