<?php
$user="raju";
$pwd="mahi";
$obj=new mysqli("localhost","root","","rajalogindb");
$sql='insert into mydb1(username,pwd) values("raju","mahi")';
$qry=$obj->prepare($sql);
$qry->execute();
?>