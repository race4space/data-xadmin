<?php
namespace DataXAdmin;
class DataXAdmin extends \phpcrud\Data{
  function __construct() {


    //$obj_xpublish_const=new \ns_mycodebuzz\xpublish\XPublishConstant();
    $obj_xpublish_const=new \phpxpublish\XPublishConstant();

    $this->con_host="localhost";
    $this->con_user="remote_user";
    $this->con_pass="Budapest.200";
    $this->con_schema="my-vm";
    $this->str_data_schema="my-vm";
    $this->str_data_table="container";
    $this->obj_theme=new \phpcrud\ThemeData();
    //$this->str_sql="SELECT id, cid, tid, type, title, tab, publish FROM `my-vm`.`container` WHERE tid<>$obj_xpublish_const->const_tid_pageItem;";
    $this->str_sql="SELECT id, cid, tid, type, title, tab, publish FROM `my-vm`.`container` ;";
    //$this->str_sql="SELECT id, cid, tid, type, title, tab, publish FROM `my-vm`.`container` WHERE type='PageItem';";
    //$this->fn_echo("this->str_sql", $this->str_sql);
    parent::__construct();

  }
  function fn_execute(){
    $this->bln_display_record_console=false;
    $this->fn_ini_action_children(true);
    parent::fn_execute();
  }
  function fn_load_query(){
    //fn_echo("start instance fn_load_query");
    parent::fn_load_query();
    //fn_echo("end instance fn_load_query");
  }

}//END CLASS DATA XADMN
?>
