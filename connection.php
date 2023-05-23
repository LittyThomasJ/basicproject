<?php
class db
{
	public function connection()
	{
		$con=mysqli_connect("localhost","root","root","student");
		return $con;
	}
	public function execute($sql)
	{
		$result=mysqli_query($this->connection(),$sql);
		return $result;
	}
}
?>