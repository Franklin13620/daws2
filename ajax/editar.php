<?php

//include '../inc/comun.php';
include '../inc/config.php';
//include '../inc/functionBD.php';include '../inc/config.php';
include '../inc/comun.php';

$bd = new GestarBD;

//include('dbcon.php');
if($_REQUEST)
{
	$x1=$_GET['codigo'];
	$username 	= $_REQUEST['username'];
	$query = "select * from `` where `` = '".strtolower($username)."'";
	sleep(1);
	$results = $bd->consulta($query) or die($x1);


	if($bd->numeroFilas() > 0) // no disponible 
	{



	}
	else
	{


$sql="UPDATE `` SET `` = '$username' WHERE ``.`` = $x1";
$bd->consulta($sql);
		echo '<div class="form-box">
                        <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Bien!</b> Se a editado correctamente.
                                    </div>
                                </div>';
	}
}


?>
