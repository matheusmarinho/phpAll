<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
*/
$mysqli = new mysqli('127.0.0.1', 'sfhera', 'sfhera2005', 'biroska');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


$sql = "select rst_mov.IDVenda, rst_mov_ite.nome from rst_mov inner join rst_mov_ite on rst_mov_ite.IDVenda = rst_mov.IDVenda where rst_mov.IDVenda =1";

$resultSet = $mysqli->query($sql);

while ($linha = $resultSet->fetch_object()) {
	echo "$linha->IDVenda";
	echo" $linha->nome";
}






$mysqli->close();
?>
