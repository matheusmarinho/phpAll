<?php
class conectar {
    var $_con;
    
    function setCon($oCon) {
      $this->_con = $oCon;
    }
    
    function getCon() {
      return $this->_con;
    }
    
    function __construct() {
       
       // $sConectar = "host=localhost user=postgres dbname=opa password=postgres";
       // $sConectar = "host=localhost user=matheusm_ong dbname=matheusm_opa password=CatOpa61";
        $_con = mysql_connect('localhost','matheusm_opa', 'Juru161','matheusm_opa');
		
       $this->setCon($_con);
       
    }
    
    function executa($sql) {
    
    $oCon = $this->getCon();
    mysql_selectdb("matheusm_opa");
    $rsSql = mysql_query($sql) or die(mysql_error()); 
    return $rsSql;
    }
    
    
}


?>