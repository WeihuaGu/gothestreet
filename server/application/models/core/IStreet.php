<?php
/**
提供相应的街道操作接口
*/
interface IStreet{
	public  function addStreet($name,$location);
	public  function delStreet($id);
	public  function transNameAndLocationToId($name,$location)

	
}
