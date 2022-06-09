<?php
if(!mysqli_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysqli_error());
}
if(!mysqli_select_db("db_healthcare"))
{
     die('oops database selection problem ! --> '.mysqli_error());
}
?>