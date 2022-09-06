<?php
session_start();
?>
<DOCTYPE html>
<html lang="en-us">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<head>
<meta charset="utf-8">
</head>
<style>
 .head{
            background-color:#663ef9;
            text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 30px;
            color: #fff;
            border-color: solid #0084ff;
            border-radius: 10px;
            font-size: 30px;
            padding: 10px 5px
		
        }
.button {
border:none;
  color: white;
  padding: 15px 22px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
margin-top:50px;
  margin-right :50px;
margin-left:210px;
border-radius:10px;
  cursor: pointer;
}
.button1 {
background-color: #663ef9;
}
.button2 {
background-color: #663ef9;
}
h5{
   margin-left: 1210px; 
 margin-top:  -35px;
 color: #663ef9;
}
</style>
<body>
            <div class="head">
            <h2>INDENT MANAGEMENT SYSTEM</h2>
            </div>
<div>
<img src="logo.jpg" style="width:45px;height:50px; margin-left:1150px; margin-top:20px;">
<h5>welcome <?php echo($_SESSION['username'] ); ?></h5>
</div>
<div class="button">
<button class="button button1">MY INDENTS</BUTTON>
<button class="button button2"input type="submit"onclick="window.location.href='4page.php';">RAISE AN INDENT</BUTTON>
</div>
</body>
</html>
