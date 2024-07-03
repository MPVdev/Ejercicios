<?php
require( "../modelos/Conjunto.php" );
$info = conjuntos( $_POST[ "Conjunto1" ], $_POST[ "Conjunto2" ], ( $_POST[ "universoelemen" ] . $_POST[ "Universo" ] ) );
echo $info;
?>