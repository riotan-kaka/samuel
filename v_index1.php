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
<li><a href="<?php echo base_url().'index.php/web'
?>">Home</a></li>
<li><a href="<?php echo
base_url().'index.php/web/about' ?>">About</a></li>
</ul>
</nav>
<div class="clear"></div>
</header>
<section>
<h1><?php echo $judul ?></h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate
velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est
laborum.
</p>
<pre>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exc_
epteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
</pre>
</section>
<footer>
<a href="">Contoh Footer</a>
</footer>
</div>
</body>
</html>

