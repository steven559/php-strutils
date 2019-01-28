<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:36
 */

class StrUtils
{

 private $str;
 public function __construct($str)
 {
     $this-> str = $str;
 }

    public function bold(){
    return "<b>". $this-> str ."</b>"."<br>";

    }
    public function italic(){
return"<i>".$this-> str ."</i>"."<br>";
    }
    public function underline(){
        return"<u>".$this-> str."</u>"."<br>";
    }
    public function capitalize(){
     return strtoupper($this->str);
    }
    public function uglify(){
    return "<br>"."<b>"."<u>"."<i>".strtoupper($this->str)."</i>"."</u>" ."</b>";
    }


}

