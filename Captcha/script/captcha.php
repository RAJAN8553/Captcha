<?php
	$conn= mysqli_connect("localhost","root","","captcha");
	if($conn === false)
	{
		die ("Database Not Connect : ". mysqli_connect_error());
	}
	$sql = "select logo_name from logo ORDER BY RAND() LIMIT 6";
	$name = mysqli_query($conn,$sql);

	if(! $name ) {
      die('Could not get data: ' . mysqli_error());
   }
   $a = array();

   while($row = mysqli_fetch_array($name))
   {
   		array_push($a, $row["logo_name"]);
   }
   
   print_r($a) ;
	echo    
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);


?>


<?php
  $conn= mysqli_connect("localhost","root","","captcha");
  if($conn === false)
  {
    die ("Database Not Connect : ". mysqli_connect_error());
  }
  $sql = "select audio_name from audio ORDER BY RAND()";
  $sql1 = "select audio_ans from audio";
  
  $name = mysqli_query($conn,$sql);
  $ans = mysqli_query($conn,$sql1);

  if(! $name ) {
      die('Could not get data:' . mysqli_error());
   }
   $a = array();

   while($row = mysqli_fetch_array($name))
   {
      array_push($a, $row["audio_name"]);
   }
   while($row1 = mysqli_fetch_array($ans))
   {
      if ()    
      array_push($a, $row["audio_name"]);
   }
   
   $ch_name = $a[array_rand($a)];

?>  

<script type="text/javascript">
  function store()
  {
    var audio_name = document.getElementById("num").value;

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
<title>Home Page</title>
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
    <?php echo "$ch_name";?>
        <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="d5">Give Answer To Bellow Input Box</div>
          </div>
          <div class="d9">
            <?php
                    echo"<audio controls>";
                         echo"<source src='../audio/$ch_name?>' type='audio/mpeg'>";
                     echo" </audio>";
            ?>
</div>
          
          <div class="d6">
             <input type = "number" id="num" placeholder="Eneter Answer Here ">
           </div>
         
     <div class="d8">
     <img class="au3" onclick="refresh()" src="../logo/reset.png" height="70px" width="70px" border="3">
                      
                    </div>
          <div>
                    <input type="submit"  class="sub1" value="Submit" name="submit" />
                <div>
                <?php   mysqli_close($conn);?>

    <?php
    if (isset($_POST["submit"]))
    {
        $val = $_POST['sel_audio_name'];
        $ch = $_POST['ch_name'];

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
  function store()
  {
    var audio_name = document.getElementById("num").value;

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
<title>Home Page</title>
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
     <img class="au3" onclick="refresh()" src="../logo/reset.png" height="70px" width="70px" border="3">
                      
                    </div>
          <div>
                    <input type="submit"  class="sub1" value="Submit" name="submit" />
                <div>
                <?php   mysqli_close($conn);?>

    <?php
    if (isset($_POST["submit"]))
    {
        $val = $ans;
        $ch = $ch_ans;

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
   echo "$a";
  
  $ch_name = strval($a);
  $sql1 = "select audio_ans from audio where audio_name=". $a ." LIMIT 1";
  $ans = mysqli_query($conn,$sql1) or die(mysqli_error($conn));;
  $row = mysqli_fetch_row($ans);
  echo $row[0]; 
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
<title>Home Page</title>
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
                         echo"<source src='../audio/$a' type='audio/mpeg'>";
                     echo" </audio>";
            ?>
</div>
          
          <div class="d6">
             <input type = "number" name="num" id="num" placeholder="Eneter Answer Here ">
           </div>
         
     <div class="d8">
    
    <img class="au3" onclick="refresh()" src="../logo/reset.png" height="70px" width="70px" border="3">

                      
                    </div>
          <div>
                    <input type="submit"  class="sub1" value="Submit" name="submit" />
                <div>
                <?php   mysqli_close($conn);?>

    <?php
    if (isset($_POST["submit"]))
    {
        $val = $_POST['num'];
        $ch = $row;

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
