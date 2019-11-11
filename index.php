<?php
//$item1 = 1;
//$item2 = 4;
//$item3 = 5;
//$v_rezult = $item1 + $item2 + $item3;
//echo 'suma 1 + 4 +5 =' . $v_rezult ;
//echo "<br>";
//$s_rezult = $v_rezult/=3;
//
//print_r('1.   dalyba 10 / 3 =' . $s_rezult);
//echo "<br>";
//$liekana = $s_rezult % 3;
//print_r('2.   liekana =' . $liekana);
//echo "<br>";
//$temperaturos = array(14, 13, 12, 13, 15, 16, 15, 14);
//$temperaturos = [14, 13, 12, 13, 15, 16, 15, 14];/*geriau naudoti toki
//var_dump($temperaturos);

/*vykdyti koda jei skaicius didesnis uz 25*/
$int_1 = 26;
If ($int_1 > 25){
echo ('skaicius ' . $int_1);
};
echo"<br>";

//vykdyti koda jei kintamojo tipas integer*/
$int_2 = $int_1;
If(is_integer($int_2)){
echo "True";
};
echo"<br>";

/*Parasykite teksta pagal amziu*/
$age = 10;
IF($age<=10) {
    echo 'kid';
}
elseif ($age>10 && $age<= 20){
        echo 'junior';
};
echo"<br>";

switch (8){
    case 1: print '1-day';
    break;
    case 2: print '2-day';
    break;
    case 3: print '3-day';
    break;
    case 4: print '4-day';
    break;
    case 5: print '5-day';
    break;
    case 6: print '6-day';
    break;
    case 7: print '7-day';
    break;
    default: print 'no day';
    break;
};
function printNumber($start, $end, $even = false) {
    for ($i = $start; $i <= $end; $i++) {
        if ($even) { // 1
            if ($i % 2 == 0) { // 1.1
                echo 'for even ' . $i . "\n";
            }
        } else { // 2
            echo 'for ' . $i . "\n";
        }
    }
}
printNumber(11, 33);
// printNumber(25, 50);
printNumber(25, 50, true);

$string1 = 'Alio';
$string2 = ' valio';
$string3 = ' namo';
echo '<br>';
function _header ($string1, $string2, $string3){
    echo '<h3>' . $string1 . '</h3>';
    echo '<h3>' . $string2 . '</h3>';
    echo '<h3>' . $string3 . '</h3>';
};

echo '<br>';
function _two_int($int1,$int2){
    return $int1 * $int2;
};
echo _two_int(3,7);
/**/
echo '<br>';
function take1($one) {
    if ($one > 0) {
        return $one;
    }
    else {
        return "neigiamas skaičius";
    }
}
echo take1(-2);
/*grazina kvadrata*/
echo '<br>';
function f_kvdr($int10){
    return $int10 * $int10;
}
echo f_kvdr(5);
/*grazina dvieju skaiciu suma*/
echo '<br>';
function _two_sum($int1,$int2){
    return $int1 + $int2;
};
echo _two_sum(3,7);

echo f_kvdr(5);
/*Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.*/
function _tree_sum($int1,$int2, $int3){
    return ($int2 - $int1) / $int3;
};
echo _tree_sum(5,55, 10);

echo '<br>';
/*Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.*/
function week($num1) {
    // if ($num1 > 7 || $num1 < 1) {
    // 	return 'skaičius neatitinka savaitės dienos';
    // }

	$result = null;

	switch ($num1) {
        case 1:
            $result = 'pirmadienis';
            break;

		case 2:
            $result = 'antradienis';
            break;

		case 3:
            $result = 'trečiadienis';
            break;

		case 4:
            $result = 'ketvirtadienis';
            break;

		case 5:
            $result = 'penktadienis';
            break;

		case 6:
            $result = 'šeštadienis';
            break;

		case 7:
            $result = 'sekmadienis';
            break;

		default:
            $result = 'skaičius neatitinka savaitės dienos';
            break;
	}

	return $result;
}

echo week(5);

echo '<br>';
/*Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().*/
$_arr1 = ['a','b','c'];
var_dump($_arr1);

echo '<br>';
/*Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.*/
function f_print_arr($_arr1){
    return $_arr1[0];
};
echo f_print_arr($_arr1);

echo '<br>';
/*Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.*/
$_arr2 =['a', 'b', 'c', 'd'];
echo "$_arr2[0] + $_arr2[1] , $_arr2[2] + $_arr2[3]", "\n";

//Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.
$arr3 = [2,5,3,9];
$result = ($arr3[0] * $arr3[1]) + ($arr3[2] * $arr3[3]);
echo $result, "\n";
//Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.
$arr4 = [];
array_push($arr4, 1);
array_push($arr4, 2);
array_push($arr4, 3);
$arr4[] = 4;
$arr4[] = 5;

echo '<br>';
/*"Nupieškite" tokio tipo piramidę:
1
22
333
4444
55555
666666
7777777
88888888
999999999*/
$colors = array("1", "22", "333", "4444","55555","666666","7777777","88888888","999999999");

foreach ($colors as $value) {
    echo "$value <br>";
};