<?php
/* ****************************************************************************
 * Author: MasteRus
 * Task: Анаграмма
 * Число 128574 примечательно тем, что, будучи удвоенным, образует число 257148, 
 * которое состоит из тех же цифр, только в другом порядке.
 * 
 * Напишите программу, которая находит и выводит минимальное натуральное число, 
 * которое, будучи умноженным на 2, 3, 4, 5 и 6, образует числа, 
 * состоящие из тех же цифр, что и исходное.
 **************************************************************************** */

//function getDigits - counts of count of different digits in number (signature)
//in: $number (integer)
//out: $digitsOfNumber - array[10] of integers with count of number
function getDigits($number)
{
    $digitsOfNumber=[0,0,0,0,0,0,0,0,0,0];
    while ($number)
    {
	$digitsOfNumber[($number%10)]++;
	$number=(int)($number/10);
    }
    return $digitsOfNumber;
}

// main part
$i=1;
$resultFound=0;		
while ((!$resultFound))
{
    $i++;
    $resultFound=1;
    //Try to get signature of number:
    //Find digits in the i,i*2 ... i*6
    for ($j=1;$j<=6;$j++)
    {
	$digits[$j]=getDigits($i*$j);
    }
    //Check signatures
    for ($j=1;$j<6;$j++)
    {
	if ($digits[$j]!=$digits[$j+1]) 
	{
	    $resultFound=0;
	    break;
	}
    }
}
// Output result and all anagrams
echo "RESULT=".$i.", RESULT*2=".($i*2).", RESULT*3=".($i*3).
        ", RESULT*4=".($i*4).", RESULT*5=".($i*5).", RESULT*6=".($i*6).PHP_EOL;