<?php

class DataBase {
    
    private static $dbName=''; 
    private static $dbHost='';
    private static $dbUsername='';
    private static $dbUserPassword='';
    
    public static $cont='';
    
    public function __construct() {
        
        exit('inic function');       
              
    }
        
     public static function connect(){
            
         if(null == self::$cont){
             
             try {
                 self::$cont=new PDO("mysql..Host=".self::$dbHost.";"."dbname=".self::$dbName,self::$dbUsername, self::$dbUserPassword);
             } catch (PDOException $e) {
                 
                 die($e->getMessage);
                                 
               
             } 
             
         } 
         return self::$cont;
                                
    }
          
    public static function disconnect(){
        
        self::$cont = NULL; 
        
    }
            
         
}        
            

