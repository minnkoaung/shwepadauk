<?php
/**
 * User: Minn Ko
 * Date: 11/19/2015
 * Time: 8:51 PM
 */
/*include "models/Data_Entry.class.php";
$editEntryData = new Data_Entry($db);
$editEntrySubmitted =  isset($_GET['id']);
if($editEntrySubmitted){
  $id = $_GET['id'];
  $test = $editEntryData->editCardData($id);
}*/



$loginOutView = include "views/login.php";
return $loginOutView;
