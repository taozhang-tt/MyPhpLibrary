<?php
/**
 * https://github.com/julycoding/The-Art-Of-Programming-By-July/blob/master/ebook/zh/Readme.md
 */

require_once "TheArtOfProgramming/MyString.php";
use TheArtOfProgramming\MyString;

$myString = new MyString();
$str = "abcdef";
$len = strlen($str);
echo "旋转字符串abcdef前两位：\n";
echo "解法一：". $myString->LeftRotateString($str, $len,2);
echo "\n";
echo "解法二：". $myString->LeftRotateString_2($str, $len, 2);
echo "\n\n";

echo "字符串 abcdad 是否包含 abd ？";
$a = 'abcdad';
$b = 'abd';
echo $myString->StringContains($a, $b) == true ? 1 : 0;
echo "\n";
echo "字符串 abcdad 是否包含 abe ？";
$a = 'abcdad';
$b = 'abe';
echo $myString->StringContains($a, $b) == true ? 1 : 0;
echo "\n\n";

echo "字符串转整数：\n";
$str = '1234';
echo 'str: '. $str. "\n";
echo '整数：'. $myString->StrToInt($str);
echo "\n\n";

echo "判断字符串是否是回文串\n";
$str_1 = 'adaada';
$str_2 = 'adbasd';
echo "str: ". $str_1. "是否回文？". $myString->IsPalindrome($str_1). "\n";
echo "str: ". $str_2. "是否回文？". $myString->IsPalindrome($str_2). "\n";
echo "\n";

echo "字符串全排列：\n";
$myString->Permutation('abc', 0, 2);
echo "\n";

echo "输出字符串abc的全组合：\n";
$myString->Combination('abc');
echo "\n";