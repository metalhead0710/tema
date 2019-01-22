<?php

namespace App\Components;

use PDO;

class Db
{
   	private static $_instance = null;
	
	public static function instance() {
        
        if ( !isset( self::$_instance ) ) {
            
            self::$_instance = new Db();
            
        }
        
        return self::$_instance;
    }
	
	protected function __construct() {}
    
    function __destruct(){}
	
	public static function getConnection() {
        
        $conn = null;
		$paramsPath = APP . '/config/db_params.php';
        $params = include($paramsPath);


        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";

	    $opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
	    ]; 
        try {
            
            $conn = new PDO($dsn, $params['user'], $params['password'], $opt);
            return $conn;
            
        } catch (PDOException $e) {
            throw $e;
            
        }
        catch(Exception $e) {
            throw $e;
        }
    }
	private function __clone () {}
	private function __wakeup () {}	
}
