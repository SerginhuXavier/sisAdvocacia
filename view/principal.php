<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>#### SisAdvocacia</title>
<link href="../public/css/estilo.css" rel="stylesheet" type="text/css" />

<script> var repeat=1
var title=document.title
var leng=title.length
var start=1
function titlemove() {
titl=title.substring(start, leng) + title.substring(0, start)
document.title=titl
start++
if (start==leng+1) {
start=0
if (repeat==0)
return
}
setTimeout("titlemove()",200)
}
if (document.title)
titlemove()
</script>
</head>
<?php
include "menu.php";
?>
<body class="body">

</body>
</html>
