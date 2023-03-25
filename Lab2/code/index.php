<?php
$very_bad_unclear_name = "15 chicken wings";

$order =& $very_bad_unclear_name;
$order .= " < 16 chicken wings ";

echo "\nYour order is: $very_bad_unclear_name.";
?>
<h2>
  Task 2  
</h2>

<?php
$chislo1 = 5;

echo "$chislo1";
echo "<br>";
$chislo2 = 7.0;
echo "\n$chislo2";
echo "<br>";
echo "$chislo1 + $chislo2 = ";
echo  $chislo1 + $chislo2;
echo "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo "$last_month - $this_month = ";
echo $last_month - $this_month;
?>


<h2>
  Task 11 
</h2>


<?php
echo "<br>";
$num_languages = 3;
$months = 11;
$days = $months * 16;
$days_per_language =  $days / $num_languages;
echo "Дней на язык: ";
echo $days_per_language;
?>


<h2>
  Task 12 
</h2>

<?php
 echo 8**2;
?>


<h2>
  Task 13 
</h2>


<?php
$my_num = 23;
$answer = $my_num;
$answer += 2;
$answer -= 2;
$answer *= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;	
?>


<h2>
  Task 14 
</h2>
<p>
Работа с %
</p>


<?php

$a = 10;
$b = 3;
echo "Остаток от деления : ", $a % $b;
echo "<br>";
if ($a % $b == 0)
	echo "Делится, результат деления: ", $a / $b;

else 
	echo "Делится с остатком, остаток от деления: ", $a % $b;
?>

<p>
    Работа со степенью и корнем
</p>

<?php

$st = pow(2,10);
echo "2 в 10 степени = ", $st;
echo "<br>";
$koren = sqrt(245);
echo "Квадратный корень из 245 = ", $koren;
echo "<br>";

$massiv = Array(4, 2, 5, 19, 13, 0, 10);
$koren_iz_summi_kvadratov = 0;
foreach($massiv as $zna4enie)
	$koren_iz_summi_kvadratov += pow($zna4enie,2);
echo "Корень из суммы квадратов элементов массива : ", $koren_iz_summi_kvadratov;
?>

<p>
    Работа с функциями округления
</p>

<?php

echo "Округление квадратного корня из 379", "<br>", round(sqrt(379),0), "<br>",  round(sqrt(379), 1), "<br>",  round(sqrt(379), 2);


$massiv_587 = Array('floor', 'ceil');
$massiv_587['floor'] = floor(sqrt(587));
$massiv_587['ceil'] = ceil(sqrt(587));
foreach($massiv_587 as $okrug)
echo "<br>",$okrug;
	
?>

<p>
    Работа с min и max
</p>

<?php
$max = max(4, -2, 5, 19, -130, 0, 10);
echo "Максимальное число: $max";
$min = min(4, -2, 5, 19, -130, 0, 10);
echo "<br> Минимальное число: $min";
?>

<p>
    Работа с рандомом
</p>

<?php
echo "Рандомное число от 1 до 100: ", rand(1,100);
$massiv_random = Array();
for($i = 0; $i < 10; $i++)
{
	$massiv_random[$i] = rand();
	echo "<br> $massiv_random[$i]";
}
?>

<p>
    Работа с модулем
</p>

<?php
$a = rand();
$b = rand();
echo "a = $a, b = $b, |$a - $b| = ",abs($a - $b);
$massiv_abs = array(1, 2, -1, -2, 3, -3);
foreach($massiv_abs as $popen)
{
	$popen = abs($popen);
	echo "<br> $popen";
}			
?>

<p>
    Общее
</p>

<?php
$number = 30;
$mas_siv = array();
$count = 0;
$i = 0;
echo "Делители $number:";
while($i < $number / 2)
{
	$i++;
	if($number % $i == 0)
	{
		$mas_siv[$count] = $i;
		$count++;
		echo " <br> $i";
	}
}
	$mas_siv[$count+1] = $number;
	echo "<br> $number";



$mas_siv_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count_2 = 0;
$sum = 0;
foreach($mas_siv_2 as $value)
{
    $sum += $value;
    $count_2++;
    if($sum > 10)
    {
        echo "<br> Число Слагаемых: $count_2";
        break;
    }
}
?>

<h2>
    Задание 15
</h2>

<?php
function printStringReturnNumber()
{
    echo "Функция сработала ";
    return rand();
}
$my_num = printStringReturnNumber();
echo "<br> $my_num";
?>

<h2>
    Задание 16
</h2>

<?php
function increaseEnthusiasm($a)
{
    return $a .= "!";
}
$b = "idk random text ";
echo increaseEnthusiasm($b);

function repeatThreeTimes($a)
{
    $c = $a;
    for($i = 0; $i < 2; $i++)
        $c .= $a;
    return $c;
}
echo "<br>", repeatThreeTimes($b);


function cut($a, $d = 10)
{
    $c = "";
    for($i = 0; $i < $d; $i++)
        $c .= $a[$i];
    return $c;
}
echo "<br>";
echo cut(repeatThreeTimes($b), 10);


$massiv_f = array(1,2,3,4,5,6,7,8,9,10);
function fucn($mas, $i)
{
	if($i < count($mas))
	{	
	echo "<br>", $mas[$i];
	$i++;
	fucn($mas, $i);
	}
} 
fucn($massiv_f, 0); 

$number_functions = 45;

function sumNum($a)
{
$valorant = 0;	
while($a != 0)
{
	$valorant += $a % 10;
	$a = intdiv( $a, 10);
}
if($valorant > 9)
		sumNum($valorant);
else
	return $valorant;
}

echo "<br>", "Сумма цифр = ";
echo sumNum($number_functions);
?>

<h2>
    Задание 17
</h2>

<?php
$massiv_x = array();
$massiv_x[0] = "x";
echo $massiv_x[0];
for($i = 1; $i < 6; $i++)
{
	$massiv_x[$i] = $massiv_x[$i-1];
	$massiv_x[$i] .= "x";
	echo "<br>", $massiv_x[$i];
}



function arrayFill($a, $b = 5)
{
    $massiv_fill = array();
    for($i = 0; $i < $b; $i++)
    {
        $massiv_fill[$i] = "";
        $massiv_fill[$i] .= $a;
    }
    return $massiv_fill;
}
$massiv_fill2 = arrayFill('x',5);
for($i = 0; $i < count($massiv_fill2); $i++)
    echo "<br>", $massiv_fill2[$i];


$massiv_2mer = [[1, 2, 3], [4, 5], [6]];
$summa = 0;
for($i = 0; $i < count($massiv_2mer); $i++)
{
    $summa += array_sum($massiv_2mer[$i]);
	
}
echo "<br>", $summa;

$massiv_2cycle = array();
$kolvo = 0;
for($i = 0; $i < 3; $i++)
{
    
    for($j = 0; $j < 3; $j++)
    {
		$kolvo += 1;
		$massiv_2cycle[$i][$j] = $kolvo;
    }
		
}
for($i = 0; $i < count($massiv_2cycle); $i++)
	for($j = 0; $j < count($massiv_2cycle[$i]); $j++)
		echo "<br>", $massiv_2cycle[$i][$j];



$massive_proizvedeniy = [2,5,3,9];
$result = $massive_proizvedeniy[0] * $massive_proizvedeniy[1] + $massive_proizvedeniy[2] * $massive_proizvedeniy[3];
echo "<br>", $result;


$user = array(
    'name' => 'Pavel', 
    'surname' => 'Smirnov', 
    'patronymic' => 'Alexandrovich');
echo "<br>";
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];
echo "<br>";

$date =array (
    'year' => '2023', 
    'month'=>'3' , 
    'day'=>'23');
echo $date['year'],"-", $date['month'], "-",$date['day'];


$takoi_massiv = ['a', 'b', 'c', 'd', 'e'];
echo "<br>";
echo count($takoi_massiv);
echo "<br>";
echo end($takoi_massiv), " ",prev($takoi_massiv);
?>

<h2>
    Задание 18
</h2>

<?php
function fucn_odin($a, $b)
{
    if($a + $b > 10)
        return true;
    else
        return false;
}


function fucn_dva($a, $b)
{
    if($a == $b)
        return true;
    else
        return false;
}
$test = rand(0,1);
if($test == 0)
    echo "верно";
else 
	echo "неверно";

echo "<br>";
$age = rand (1, 200);
echo $age, " - ";
if ($age > 99 || $age < 10)
		echo "Число < 10 или > 99";
else
{	
	$peremennaya_0 = 0;
	while($age > 0)
	{
		$peremennaya_0 = $age % 10;
		$age = intdiv($age, 10);
	}
		if($peremennaya_0 < 10)
			echo "Сумма цифр однозначна";
		else
			echo "Сумма цифр двузначна";
		
}
echo "<br>";

$arr = [1,6,5];
if(count($arr) == 3)
    echo array_sum($arr);
?>

<h2>
    Задание 19
</h2>

<?php
$MMM = 'x';
for($r = 0; $r < 20; $r++)
{
  echo "<br>",$MMM;
  $MMM = $MMM.'x';
}
?>

<h2>
    Задание 20
</h2>

<?php
$massiv_4isel = [71,7,11,1,17,77,1];
$result = array_sum($massiv_4isel) / count($massiv_4isel);
echo "<br>";
echo $result;
echo "<br>";

echo array_sum(range(1, 100));

$massiv_kvadratov = [71,7,11,1,17,77,1];
$massiv_kvadratov = array_map('sqrt', $massiv_kvadratov);
foreach($massiv_kvadratov as $otvet)
    echo "<br>", $otvet;


$massiv_keys = array_combine(range('a', 'z'), range(1, 26));
$keys = 1;
while($keys <= 26)
{
    echo key($massiv_keys), current($massiv_keys),"<br>";
    next($massiv_keys);
    $keys++;
}  


$a = "1234567890";
$stroka = str_split($a, 2);
echo array_sum($stroka);
?>
