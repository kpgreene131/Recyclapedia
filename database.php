<?php
  include 'database-info.php';
 
  $link = mysqli_connect($servername, $username, $password, $dbname);

  if(!$link) 
  {
      die("ERROR: could not connect. " . mysqli_connect_error());
  }
  
   
  function getItemRecyclable($item) 
  {
      $qry = "SELECT is_recyclable FROM recycle WHERE item=?";
      $stmt = mysqli_prepare($GLOBALS['link'], $qry);
      mysqli_stmt_bind_param($stmt, 's', $item);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt, $recyclable);
      mysqli_stmt_fetch($stmt);
      
      if($recyclable == 1) 
      {
          echo ("Curbside recycling" . "<br>");
      }  
  } 
   
  function getItemSpecifics($item) 
  {
      $qry = "SELECT specifics FROM recycle WHERE item=?";
      $stmt = mysqli_prepare($GLOBALS['link'], $qry);
      mysqli_stmt_bind_param($stmt, 's', $item);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt, $specifics);
      mysqli_stmt_fetch($stmt);
      
      echo $specifics;
  }
  
  //mysqli_close($link);   
?>
