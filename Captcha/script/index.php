
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
   $ch_name = $a[array_rand($a)];
?>	
<script src="../jquery/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
  var name ;
  $(".icon").click(function(){
  $(".selected").removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
    name = $(this).attr('id');

    $(this).closest("form").append($("<input>", {"type":"hidden", "name":"sel_icon_name", "value":name}));
  })
});	

</script>
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
<link  rel="stylesheet" href="../css/style.css"/>

<div class="dd1"> 
	<div class="d1">
    <div class="d2">
    	<div class="d3">
	    	<div class="d4">
              <img src="../photos/oc1.png" height="120px" width="250px"></div>
              <div class="dd4">
              🅾🅿🆃🅸🅲🅰🅻 <p class="sp"> 🅲🅰🅿🆃🅲🅷🅰 </p>
              
      </div> 
    
        <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		            <div class="d5">
Click  the <font color="Blue"> <b><?php
print_r(strtoupper(substr($ch_name, 0, -4))); echo "<input type='hidden' value=$ch_name name='ch_name'>"

?>
</font>  </b>
		             </div>
					<div class="d6">
						<?php
						 
                        echo "<img src='../logo/icons/$a[0]'  id='$a[0]' class='icon' height='70px' width='70px' border='3' /> "; 
                        echo "<img src='../logo/icons/$a[1]' id='$a[1]' class='icon' height='70px' width='70px' border='3'/> "; 
                        echo "<img src='../logo/icons/$a[2]' id='$a[2]' height='70px'class='icon'  width='70px' border='3'/> "; 
                        echo "<img src='../logo/icons/$a[3]' id='$a[3]' height='70px' width='70px'class='icon'  border='3'/> "; 
                        echo "<img src='../logo/icons/$a[4]' class='icon' id='$a[4]' height='70px' width='70px' border='3'/> "; 
                        echo "<img src='../logo/icons/$a[5]' id='$a[5]' class='icon' height='70px' width='70px' border='3'/> "; 
                       	?>
                    </div>
                    
					<div class="d7">
                    	<img class="au" onclick="audio()"src="../logo/audio.png" height="70px" width="70px" border="3"/>
                        <img class="au" onclick="refresh()" src="../logo/reset.png" height="70px" width="70px" border="3"/>
                   	</div>

                    <input type="submit" class="sub" value="Submit" name="submit" />
                <?php   mysqli_close($conn);?>

    <?php
    if (isset($_POST["submit"]))
    {
        $val = $_POST['sel_icon_name'];
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