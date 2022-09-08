<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <style>
    .head{
        background-color: #4169a9;
        text-align: center;
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 20px;
        color: white;
        border:1px solid #4169a9;
        padding-top:10px;
        padding-bottom: 7px;
        border-radius: 10px;
    }
    .block1{
        color:#4169a9;
        padding: 10px 10px;
        margin-top:50px;

    }
    .block2{
        color:#4169a9;
        padding: 10px 10px;
    }
    .block3{
        color:#4169a9;
        padding: 10px 10px;
        
    }
    .block4{
        color:#4169a9;
        padding: 10px 10px;
    }
    .block5{
        color:#4169a9;
        padding: 10px 10px;
        margin-top:-20px;
    }
    .button1{
            
            padding: 9px 25px;
            margin-left:600px;
           border-radius: 10px;
            background-color: #4169a9;
            margin-top: 80px;
            color:#fff;
    }  
    .a{
        margin-top: 50px;
        margin-left:120px;
        color: #4169a9;
    }
      
   .b{
        margin-left:600px;
        margin-top:-35px;
        color:#4169a9;
        

    } 
    .c{
        margin-left:1100px;
        margin-top:-34px;
        color:#4169a9;
    }
    h5{
   margin-left: 1210px; 
 margin-top:  -35px;
 color: #4169a9;
}
    
</style>
</head>
<div class="head">
    <h3>INDENT MANAGEMENT SYSTEM</h3>
    </div>
    <div>
        <img src="logo.jpg" style="width:45px;height:50px; margin-left:1150px; margin-top:20px;">
        <h5>welcome <?php echo($_SESSION['username'] ); ?></h5>
        </div>
<body>
    <div class="head1">
        <div class="a"> <h4>Institute:<?php echo($_SESSION['Institute'] ); ?> </h4></div> 
        <div class="b"><h4> Category:<?php echo($_SESSION['Category'] ); ?> </h4></div> 
        <div class="c"><h4>Type:<?php echo($_SESSION['Type'] ); ?> </h4></div>
    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="block1">
                <div class="mb-2 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Block: </label>
                  <div class="col-sm-10">
                  <select name="Block" required> 
                      <option value="A">A</option> 
                      <option value="B">B</option> 
                      <option value="C">C</option>  
                </select>
                  </div>
                </div>
            </div>
            <div class="block2">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Room No: </label>
                    <div class="col-sm-10">
                    <select name="Department" required> 
                      <option value="CSE">CSE</option> 
                      <option value="ECE">ECE</option> 
                      <option value="EEE">EEE</option>  
                      <option value="IT">IT</option> 
                      <option value="MECH">MECH</option> 
                </select>
                    </div>
                </div>
            </div>
            <div class="block3">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Department: </label>
                    <div class="col-sm-10">
                        <input type="text" style="padding:10px 10px;border-color:1px  #4169a9;border-radius: 10px;" >
                    </div>
                </div>
            </div>
            <div class="block4">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">HoD: </label>
                        <div class="col-sm-10">
                            <input type="text" style= "padding:10px 10px;border-radius: 10px;border-color: #4169a9;">
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-6 col-sm-4">
            <div class="block5">
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label " style="margin-left:40px; margin-top:80px;">Description: </label>
                  <div class="col-sm-10">
                    <input type="text" style="padding:120px 60px;margin-top:-50px; margin-left: 150px; border-radius: 15px; border-color: 1px  #4169a9;padding-left:350px;" >
                  </div>
                  <div class="button">
                    <button class="button button1" type="submit">SUMBIT</button>
                    </div>
                </div>
                </div>
          </div>
      </div>
</body>
</html>