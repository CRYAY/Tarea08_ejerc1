<?php
require_once('rfc_m.php');

if( isset($_POST['txtnombre']) ){ //validar que al menos el form se envio 1 ocasion

    //recupero datos de la vista (html)
    $nom=$_POST['txtnombre'];
    $appat=$_POST['txtapep'];
    $apmat=$_POST['txtapem'];
    $fecha=$_POST['txtfecha'];

    //instanciar clase
    $objmio= new personarfc();
    $objmio->setdatos($nom,$appat,$apmat,$fecha);
    $datos=$objmio->generarrfc();
}

require_once('rfc_v.php');

?>