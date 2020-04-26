<?php
namespace DataXAdmin;
require_once("vendor/autoload.php");
require_once($_SERVER['DOCUMENT_ROOT']."/data-xadmin/DataXAdmin.php");
$obj_data=new DataXAdmin();
$obj_data->fn_execute();
?>
