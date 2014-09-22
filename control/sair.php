<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
echo "<script>alert('Você está sendo deslogado do sistema');</script>";
session_destroy();
echo "<script>window.location='../index.php';</script>";
?>
</head>