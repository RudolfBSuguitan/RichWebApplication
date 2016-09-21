<?php
include_once ("model/model.php");
include ("controller/controller.php");
include ("view/view.php");

session_start ();

$action = "";
if (! empty ( $_REQUEST ['action'] ))
	$action = $_REQUEST ['action'];

$model = new Model ();
$controller = new Controller ( $model, $action );
$view = new View ( $controller, $model );

$view->getHTMLOutput ();
?>
