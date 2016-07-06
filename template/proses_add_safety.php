<?php
include ("connect.php");

if (isset($_POST["submit"]))
{
	$sql = "INSERT INTO table_safety_statistik VALUES (:tahun,:bulan,:wh,:ftc,:lt,:lwc,:pdc,:mtc,:fac,:mva,:nmc,:freq,:sev)";
	$PDOStatement = $PDO -> prepare($sql);
	$PDOStatement -> bindValue("tahun", trim($_POST["tahun"]));
	$PDOStatement -> bindValue("bulan", trim($_POST["bulan"]));
	$PDOStatement -> bindValue("wh", trim($_POST["wh"]));
	$PDOStatement -> bindValue("ftc", trim($_POST["ftc"]));
	$PDOStatement -> bindValue("lt", trim($_POST["lt"]));
	$PDOStatement -> bindValue("lwc", trim($_POST["lwc"]));
	$PDOStatement -> bindValue("pdc", trim($_POST["pdc"]));
	$PDOStatement -> bindValue("mtc", trim($_POST["mtc"]));
	$PDOStatement -> bindValue("fac", trim($_POST["fac"]));
	$PDOStatement -> bindValue("mva", trim($_POST["mva"]));
	$PDOStatement -> bindValue("nmc", trim($_POST["nmc"]));
	$PDOStatement -> bindValue("freq", number_format($_POST["freq"], 2));
	$PDOStatement -> bindValue("sev", trim($_POST["sev"]));
	$affected = $PDOStatement -> execute();

	if ($affected)
	{
		header('Location:index_admin.php?page=form_safety_statistik&&error=0');
		exit ;
	}
	else
	{
		header('Location:index_admin.php?page=form_safety_statistik&&error=1');
		exit ;
	}

}
else
{
	header('Location:index_admin.php?page=form_safety_statistik&&error=2');
	exit ;
}
?>