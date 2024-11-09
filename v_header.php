<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">

body{
background: #eee;
color: #333;
font-family: sans-serif;
font-size:15px;
}
#wrapper{
background: #fff;
width: 1100px;
margin: 20px auto;
}
#wrapper header{
background: #232323;
padding: 20px;
}
#wrapper header hgroup{
float: left;
color: #fff;
}
#wrapper header nav{
float: right;
margin-top: 50px;
}
#wrapper header nav ul{
padding: 0;
margin: 0;
}
#wrapper header nav ul li{
float: left;
list-style: none;
}
#wrapper header nav ul li a{
padding: 15px;
color: #fff;
text-decoration: none;
}
.clear{
clear: both;
}
footer{
background: #232323;
padding: 20px;
}
footer a{
color: #fff;
text-decoration: none;
}
section{
</style>

</head>
<body>
<div id="wrapper">
<header>
<hgroup>
<h1>Contoh Template Headeer</h1>
<h3>Membuat template sederhana codeigniter</h3>
</hgroup>
<nav>
<ul>
<li><a href="<?php echo base_url().'index.php/web1'
?>">Home</a></li>
<li><a href="<?php echo
base_url().'index.php/web1/about' ?>">About</a></li>
</ul>
</nav>
<div class="clear"></div>
</header>
