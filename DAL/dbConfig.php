<?php
class dbConfig{
  //properties
  public static $server = "mysql.hostinger.co.uk";
  public static $user="u115822113_scode";
  public static $passwrod="u115822113_scode";
  public static $database ="u115822113_scode";
  //methods
  public static function connectDb(){
    return new mysqli($server, $user, $password, $databse);
  }

}
 ?>