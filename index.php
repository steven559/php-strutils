<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:54
 */

require"StrUtils.php";

$myStr=new StrUtils('dede');
echo $myStr->bold();
echo $myStr->italic();
echo $myStr->underline();
echo $myStr->capitalize();
echo $myStr->uglify();
