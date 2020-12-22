<!DOCTYPE html> 
<html> 
<section class="signup-form">
     <h2>Register</h2>
     <form action="includes/singup.inc.php" method="post">
      <input type="text" name="name" placeholder="Name..."><br><br>
      <input type="text" name="uid" placeholder="Username..."><br><br>
      <input type="password" name="pwd" placeholder="Password..."><br><br>
      <label for="city">Choose a city:</label>
<select id="city" name="citylist" form="cityform">
  <option value="Skopje">Skopje</option>
  <option value="Bitola">Bitola</option>
  <option value="Ohrid">Ohrid</option>
  <option value="Tetovo">Tetovo</option>
  <option value="Struga">Struga</option>
</select><br><br>
      <input type="radio" name="status" value="Free" checked> Free&nbsp;
      <input type="radio" name="status" value="Basic" checked> Basic&nbsp;
  <input type="radio" name="status" value="Premium"> Premium
  <br>
  <br>
  <input type="checkbox" name="checkbox" value="check" id="agree" /> 	End user Agreement 
  <br><br>
      <button type="submit" name="submit">Register</button>
     
     </form>

     <br>
    
     <?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='db';

$fname;
$uid;
$pwd;
$citylist;
$status;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['uid'])){		
		$uid = $_POST['uid'];		
	}
	if (isset($_POST['pwd'])){		
		$pwd = $_POST['pwd'];		
	}
	if (isset($_POST['citylist'])){		
		$citylist = $_POST['citylist'];		
	}	
	if (isset($_POST['status'])){		
		$status = $_POST['status'];		
	}	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (FullName, Username, Password, City, rStatus) VALUES ('".$fname."','".$uid."','".$pwd."','".$citylist."','".$status."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>

  
 </section>