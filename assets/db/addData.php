<HTML>
<body>
    <?php
	require('dbconfig.php');
	// Check For Submit
	if(isset($_POST['submit']))
    {
        $name;
        if(empty($_POST['name'])){
            $name= mysqli_real_escape_string($conn,'Anonymous User'); 
        }
        else{
            $name= mysqli_real_escape_string($conn,$_POST['name']); 
        }
        $gender;
        if($_POST['gender'] == 'Others'){
            $gender= mysqli_real_escape_string($conn,$_POST['gender'] . " (". $_POST['othersInput'] .")");
        }
        else{
            $gender= mysqli_real_escape_string($conn,$_POST['gender']);
        } 
        $officeVisited = mysqli_real_escape_string($conn,$_POST["officeVisited"]); 
        $frontdeskOfficer = mysqli_real_escape_string($conn,$_POST["frontdeskOfficer"]); 
        $dateServed = mysqli_real_escape_string($conn,$_POST["dateServed"]); 
        $campus = mysqli_real_escape_string($conn,$_POST["campus"]); 
        $clientType = mysqli_real_escape_string($conn,$_POST["clientType"]); 
    
        $completeness = mysqli_real_escape_string($conn,$_POST["completeness"]); 
        $accuracy = mysqli_real_escape_string($conn,$_POST["accuracy"]); 
        $speed = mysqli_real_escape_string($conn,$_POST["speed"]); 
        $SCOVID19 = mysqli_real_escape_string($conn,$_POST["SCOVID19"]); 
        
        $knowledge = mysqli_real_escape_string($conn,$_POST["knowledge"]); 
        $attitude = mysqli_real_escape_string($conn,$_POST["attitude"]); 
        $grooming = mysqli_real_escape_string($conn,$_POST["grooming"]); 
        $PCOVID19 = mysqli_real_escape_string($conn,$_POST["PCOVID19"]); 
    
        $location = mysqli_real_escape_string($conn,$_POST["location"]); 
        $workSpace = mysqli_real_escape_string($conn,$_POST["workSpace"]); 
        $cleanliness = mysqli_real_escape_string($conn,$_POST["cleanliness"]); 
        $equipmentAndFurnishing = mysqli_real_escape_string($conn,$_POST["equipmentAndFurnishing"]); 
        $OCOVID19 = mysqli_real_escape_string($conn,$_POST["OCOVID19"]); 
    
        $overall = mysqli_real_escape_string($conn,$_POST["overall"]); 
        if(empty($_POST['comments'])){
            $comment = mysqli_real_escape_string($conn,"No Comment"); 
        }
        else{
            $comment = mysqli_real_escape_string($conn,$_POST['comments']); 
        }  

		$query1 = "INSERT INTO userinfo (name, gender, officeVisited, frontdeskOfficer, dateServed, campus, clientType, logdt) VALUES ('$name','$gender' ,'$officeVisited' ,'$frontdeskOfficer' ,'$dateServed' ,'$campus' ,'$clientType' , now())";
        $query2 = "INSERT INTO services (completeness, accuracy, speed, SCovid19, logdt) VALUES ('$completeness', '$accuracy' , '$speed' ,'$SCOVID19' , now())";
        $query3 = "INSERT INTO personnel (knowledge, attitude, grooming, PCOVID19, logdt) VALUES ('$knowledge' ,'$attitude' ,'$grooming' ,'$PCOVID19', now())";
        $query4 = "INSERT INTO office (location, workSpace, cleanliness, equipmentAndFurnishing, OCOVID19, logdt) VALUES ('$location','$workSpace','$cleanliness','$equipmentAndFurnishing','$OCOVID19', now())";
        $query5 = "INSERT INTO overall (overall, comments, logdt) VALUES ('$overall', '$comment', now())";
		
        if(mysqli_query($conn, $query1))
        {
            header('Location: '.ROOT_URL.'');
        } 
        else 
        {
			echo 'ERROR: '. mysqli_error($conn);
		}

        if(mysqli_query($conn, $query2))
        {
            header('Location: '.ROOT_URL.'');
        } 
        else 
        {
			echo 'ERROR: '. mysqli_error($conn);
		}

        if(mysqli_query($conn, $query3))
        {
            header('Location: '.ROOT_URL.'');
        } 
        else 
        {
			echo 'ERROR: '. mysqli_error($conn);
		}

        if(mysqli_query($conn, $query4))
        {
            header('Location: '.ROOT_URL.'');
        } 
        else 
        {
			echo 'ERROR: '. mysqli_error($conn);
		}

        if(mysqli_query($conn, $query5))
        {
            header('Location: '.ROOT_URL.'');
        } 
        else 
        {
			echo 'ERROR: '. mysqli_error($conn);
		}

	}
?>
    <script type="text/javascript">
    alert('Thank you '+ '<?php echo $name; ?>');
    window.location.href = "../../";
    </script>
</body>

</HTML>