
<?php
  $conn= mysqli_connect("localhost","root","","captcha");
  if($conn === false)
  {
    die ("Database Not Connect : ". mysqli_connect_error());
  }
  $sql = "select audio_name from audio ORDER BY RAND()";
  $a=0;
  $ch_ans;
  $audio = mysqli_query($conn,$sql);

  if(! $audio ) {
      die('Could not get data:' . mysqli_error());
   }
   while($row = mysqli_fetch_array($audio))
   {
      $a =$row["audio_name"];
   }

  $sql1 = "select audio_ans from audio where audio_name=".$a;
  $ans = mysqli_query($conn,$sql1);

  $ch_name = $a;
?>  

<script type="text/javascript">
  function refresh()
  {
    
      location.reload(); 

  }  
</script>

<script type="text/javascript">
  function audio()
  {
     window.location.replace("../script/sound.php"); 

  }  
</script>

<html>
<body>
<title>Sound Page</title>
<link  rel="stylesheet" href="../css/style1.css"/>

<div class="dd1"> 
  <div class="d1">
    <div class="d2">
      <div class="d3">
        <div class="d4">
              <img src="../photos/oc1.png" height="120px" width="250px">
        </div>
              <div class="dd4">
              🅾🅿🆃🅸🅲🅰🅻 <p class="sp"> 🅲🅰🅿🆃🅲🅷🅰 </p>
              </div> 
       <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="d5">Give Answer To Bellow Input Box</div>
          </div>
          <div class="d9">
            <?php
                    echo"<audio controls>";
                         echo"<source src='../audio/4.mp3' type='audio/mpeg'>";
                     echo" </audio>";
            ?>
</div>
          
          <div class="d6">
             <input type = "number" name="num" id="num" placeholder="Eneter Answer Here ">
           </div>
         
     <div class="d8">
    
    <!--<img class="au3" onclick="refresh()" src="../logo/reset.png" height="70px" width="70px" border="3">
-->
                      
                    </div>
          <div>
                    <input type="submit"  class="sub1" value="Submit" name="submit" />
                <div>
                <?php   mysqli_close($conn);?>

    <?php
    if (isset($_POST["submit"]))
    {
        $val = $_POST['num'];
        $ch = 5;

       header("Location: pass.php?sel=$val&ch=$ch");
    }
   
?>

        </form>
    </div>
  
    </div>
    </div>
</div>
</body>
</html>

