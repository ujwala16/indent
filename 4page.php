<?php
include("database.php");
include("insert-script.php");
session_start();
?>
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <head>
    <title>INDENT MANAGEMENT SYSTEM</title>
</head>
    <style>
        .head{
            background-color:#663ef9;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
            color: white;
            border-radius: 10px;
            border: 1px solid #0084ff ;
            text-align: center;
            padding-top: 10px;
        }
        .one{
          margin-top: 10px;
        margin-left:190px;
        }
        .two{
          margin-left:500px;
        margin-top:-45px;
        }
        
       .three{
        margin-left:800px;
        margin-top:-30px;
       }
       .four{
        margin-left: 1000px;
        margin-top: 300px;
        
       }
       .main{
        margin-top: 100px;
       }
       h5{
   margin-left: 1210px; 
 margin-top:  -35px;
 color: #663ef9;
}
       
       
    </style>
<body>
        <div class="head">
            <h3>EMPLOYEE MANAGEMENT SYSTEM</h3>
        </div>
        <div>
            <img src="logo.jpg" style="width:45px;height:50px; margin-left:1150px; margin-top:20px;">
            <h5>welcome <?php echo($_SESSION['username'] ); ?> </h5>
           </div>
        <div class="main">
        <div class="one">
<form action="" method="post">
<label for="lang"style="color:#663ef9"><b>Institute:</b></label>
<select name="Institute"> 
<option value="SELECT">SELECT</option>
<option value="VIIT">VIIT</option> 
<option value="VIEW">VIEW</option> 
<option value="VIPT">VIPT</option> 
<option value="VVL DVD">VVL DVD</option> 
<option value="VVL TMP">VVL TMP</option> 
<option value="TRANSPORT">TRANSPORT</option> 
</select> 
      </div>
      <div class="two">
      <label for="lang"style="color:#663ef9"><b>Category:</b></label> 
   <select name="Category"> 
    <option value="SELECT">SELECT</option>
    <option value="Electrical">Electrical</option>
    <option value="Carpentry">Carpentry</option> 
    <option value="Hardware">Hardware</option> 
    <option value="Software">Software</option> 
    <option value="Plumbing">Plumbing</option> 
    <option value="Civil">Civil</option> 
    </select>  
      </div>
      <div class="three">
      <label for="lang"style="color:#663ef9"><b>Type:</b></label>
    <select name="Type"> 
    <option value="SELECT">SELECT</option>
    <option value="New">New</option> 
    <option value="Repair">Repair</option> 
    <option value="Removal">Removal</option>  
    </select>  
      </div>
      </div>
      
<input type="submit" name="submit" style="background-color:#663ef9; color:#fff;border-radius:10px;padding:10px 10px;margin-top: 350px;margin-left:1200px">
</form>      
      </body>
    </html>
   