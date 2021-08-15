<?php
  $flag=0;
    if($_REQUEST['sel']==$_REQUEST['ch'])
    {
      echo "<center> <img src='../photos/success.png' height='100%' width='75%'>";
    }
    else
    {
      echo "<center> <a href='../script/'> <img src='../photos/failed.png' height='100%' width='75%'> </a>";
      
    }
?>



