<html>    
<head>    
    <title>INDENT MANAGEMENT SYSTEM</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>
<style>
    h2{ 
    text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 30px;
            color: #fff;
            border-color:  #663ef9;
            border-radius: 10px;
            font-size: 30px;
            padding: 10px 32px; 
            background-color: #663ef9;
     
} 
.button {
border:none;
  color: white;
  padding: 15px 22px;
  text-align: right;
  display: inline-block;
  font-size: 16px;
  margin-right :50px;
margin-left:10px;
transition: all 0.3S;
letter-spacing: 1PX;
border-radius:10px;
  cursor: pointer;
}
.button1 {
background-color: #663ef9;
}
.button2 {
background-color: #663ef9;
}
.button3{
    background-color: #663ef9;
}
</style>
<body style="margin: 50px;">
    <h2>INDENT MANAGEMENT SYSTEM</h2><br>
    <div class="button">
        <button class="button button1">ONGOING</BUTTON>
        <button class="button button2">COMPLETED</BUTTON>
        <button class="button button3">TO BE APPROVED BY ME</BUTTON>
        </div>
      <br>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>TOKENID</th>
            <th>DATE</th>
            <th>BLOCK</th>
          </tr>
        </thead>
        
        <tbody>
        <?php
        include("connection.php");
        session_start();
        $sql= "SELECT id,subdate,Department,Block FROM detail";
        $result = $con->query($sql);

        if(!$result){
          die("Invalid query: ".$connection->error);
        }

        while($row = $result->fetch_assoc()){
          echo "<tr>
          <td>".$row["id"]."</td>
          <td>".$row["Department"]."</td>
          <td>".$row["subdate"]."</td>
          <td>".$row["Block"]."</td>
          <td>
            <a class='btn btn-primary' href='Approve'>APPROVE</a>
            <a class='btn btn-danger' href='Decline'>DECLINE</a>
          </td>
        </tr>";
        }
         
        ?>
        </tbody>
      </table>
</body>