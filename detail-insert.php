<?php 

if(isset($_POST['submit'])){
  session_start();
  $Block = $_POST['Block'];
  $RoomNo = $_POST['RoomNo'];
  $Department = $_POST['Department'];
  $Description = $_POST['Description'];
     if(!empty($Block) && !empty($RoomNo ) && !empty($Department) && !empty($Description)){
      $query = 
      "INSERT INTO detail (Block,RoomNo,Department,Description,uniqueid) 
      VALUES('$Block', 
             '$RoomNo',
             '$Department',
             '$Description',
             concat('$Block',' ','$RoomNo')
             )";


      $result = $conn->query($query);
     
      if($result){
        $_SESSION['Block']=$Block;
        $_SESSION['RoomNo']=$RoomNo;
        $_SESSION['Department']=$Department;
        $_SESSION['Description']=$Description;
        header("location:5page.php");
      }  
    }

  }

?>