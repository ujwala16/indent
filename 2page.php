<?php
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
            text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
            color: white;
            border-color: solid #0084ff;
            border-radius: 10px;
            padding-top: 8px;
            padding-bottom: 5px;
        }
.button{
    margin-top: 50px;
    margin-left: 50px;
    font-size: 20px;
    margin-right: 50px;
}
    .a{
      margin-left: 100px;
    }

.button1{

    padding:60px 60px;
    background-color:#663ef9;
    color : white;
    border-radius: 20px;
    margin-left: 250px;
}
.button2{
    padding:60px 60px;
    background-color: #663ef9;
    color : white;
    border-radius: 20px;
    margin-left: 50px;
}


.button3{
    padding:60px 60px;
    background-color: #663ef9;
    color : white;
    border-radius: 20px;
    margin-left: 50px;
}
.b{
margin-left: 100px;
max-height: fit-content;
}


.button4{
    padding:60px 40px;
    background-color: #663ef9;
    color : white;
    border-radius: 20px;
    margin-left: 250px;
}
.button5{
    padding:60px 55px;
    background-color: #663ef9;
    color : white;
    align-items: center;
    border-radius: 20px;
    margin-left: 50px;
    max-height: 155px;
}

.button6{
    padding:60px 40px;
    background-color: #663ef9;
    color : white;
    border-radius: 20px;
    margin-left: 50px;
}
h5{
   margin-left: 1210px; 
 margin-top:  -35px;
 color: #663ef9;
}
    </style>
<body>
        <div class="head">
            <h2>EMPLOYEE MANAGEMENT SYSTEM</h2>
            </div>
            <div>
<img src="logo.jpg" style="width:45px;height:50px; margin-left:1150px; margin-top:20px;">
<h5>welcome <?php echo($_SESSION['username'] ); ?></h5>
</div>
            <div class="button">
<div class="a">
<button class="button button1" href="#" role="button">PROFILE</button>
<button class="button button2"input type="submit"onclick="window.location.href='3page.php';">INDENTS</button>
<button class="button button3" type="submit">PAYROLE</button>
</div>
<div class="b">
<button class="button button4" type="submit">GRIEVANCES</button>
<button class="button button5" type="submit">360<br>FEEDBACK</button>
<button class="button button6" type="submit">ATTENDENCE</button>
</div>


            </div>
    </body>

</html>