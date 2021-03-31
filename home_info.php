<?php
  $cardboardTitle = "Cardboard";
  $glassTitle = "Glass";
  $aluminumTitle = "Aluminum";
  $metalTitle = "Metal";
  $plasticTitle = "PET Plastic";
  $link = mysqli_connect("localhost", "root", "", "recyclables");

  if($link == false) {
    die("ERROR: could not connect. " . mysqli_connect_error());
  }

  $cb = "SELECT * FROM recycling_table WHERE Category='Cardboard'";
  mysqli_query($link, $cb) or die('Error querying database');
  $cbResult = mysqli_query($link, $cb);
  while($cbRow = mysqli_fetch_array($cbResult)) {
    if($cbRow['Recyclable'] == 1) {
      $cbRecyclable = "Recyclable through Curbside Recycling";
      $cbSpecifics = $cbRow['Specifics'];
      }
    }
  // $cbRecyclable = mysqli_query($link, "SELECT Recyclable FROM recycling_table WHERE Category='Cardboard'");
  // $cbSpecifics = mysqli_query($link, "SELECT Specifics FROM recycling_table WHERE Category='Cardboard'");
  // $cbRow = mysqli_fetch_array($cbSpecifics, MYSQLI_ASSOC);
  // $row = mysqli_fetch_array($cbRecyclable, MYSQLI_NUM);
  // if($cbRecyclable == 1) {
  //   $cbRecyclable = "Recyclable through local curbside";
  // }

  $gl = "SELECT * FROM recycling_table WHERE Category='Glass'";
  mysqli_query($link, $gl) or die('Error querying database');
  $glResult = mysqli_query($link, $gl);
  while($glRow = mysqli_fetch_array($glResult)) {
    if($glRow['Recyclable'] == 1) {
      $glRecyclable = $cbRecyclable;
      $glSpecifics = $glRow['Specifics'];
      }
    }

  $al = "SELECT * FROM recycling_table WHERE Category='Aluminum'";
  mysqli_query($link, $al) or die('Error querying database');
  $alResult = mysqli_query($link, $al);
  while($alRow = mysqli_fetch_array($alResult)) {
    if($alRow['Recyclable'] == 1) {
      $alRecyclable = $cbRecyclable;
      $alSpecifics = $alRow['Specifics'];
      }
    }

  $m = "SELECT * FROM recycling_table WHERE Category='Metal'";
  mysqli_query($link, $m) or die('Error querying database');
  $mResult = mysqli_query($link, $m);
  while($mRow = mysqli_fetch_array($mResult)) {
    if($mRow['Recyclable'] == 1) {
      $mRecyclable = $cbRecyclable;
      $mSpecifics = $mRow['Specifics'];
      }
    }

  $p = "SELECT * FROM recycling_table WHERE Category='Plastic'";
  mysqli_query($link, $p) or die('Error querying database');
  $pResult = mysqli_query($link, $p);
  while($pRow = mysqli_fetch_array($pResult)) {
    if($pRow['Recyclable'] == 1) {
      $pRecyclable = $cbRecyclable;
      $pSpecifics = $pRow['Specifics'];
      }
    }
  ?>
