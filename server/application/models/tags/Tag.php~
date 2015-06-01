<?php
/**
@auther 
*/
define('DS', DIRECTORY_SEPARATOR);
define('freetagpath', realpath(dirname(__FILE__).DS.'freetag'.DS));
require './ITag.php';
require freetagpath.'/freetag.class.php';
class Tag implements ITag{
var $freetag_instance;
function Tag(){
$this->freetag_instance=new freetag();
}
function getObjectsWithTag($tag, $offset = 0, $limit = 100, $tagger_id = NULL){
return $this->freetag_instance->get_objects_with_tag($tag, $offset = 0, $limit = 100, $tagger_id = NULL);



}
}


