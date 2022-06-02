<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Final Output</title>   
<meta name="description" content="Bootstrap.">  
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">  
<script src="../bootstrap/js/jquery.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="../bootstrap/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>  
<body>  
<div class="row header" style="text-align:center;color:green">
<h3>Bootstrap</h3>
</div>
<table id="myTable" class="table table-striped" style="width:100%;">  
        <thead>  
          <tr>  
            <th style="padding-right: 0px;height: 100%;">Name</th>
                    <th>Gender</th>
                    <th style="padding-right: 0px;">Frontdesk Officer</th>
                    <th>Date Served</th>
                    <th>Campus</th>
                    <th>Client Type</th>
                    <th style="padding-right: 0px;">Services</th>
                    <th>Personnel</th>
                    <th>Office</th>
                    <th>Overall</th>
                    <th>Comments</th>
                    <th>Log Date</th>
            
          </tr>  
        </thead>  
        <tbody>  
          <?php
                require('../db/dbconfig.php');
                $sql = "SELECT * FROM userinfo\n"

                . "INNER JOIN services ON userinfo.userID = services.servicesID\n"

                . "INNER JOIN personnel on services.servicesID = personnel.personnelID\n"

                . "INNER JOIN office ON personnel.personnelID = office.officeID\n"

                . "INNER JOIN overall ON office.officeID = overall.overallID";
                $result = $conn->query($sql);

            
                if (!empty($result) && $result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo  "<tr><td>" . $row["name"]."</td><td>" . $row["gender"]."</td>
                    <td>" . $row["frontdeskOfficer"]."</td><td>" . $row["dateServed"]."</td><td>" . $row["campus"]."</td><td>" . $row["clientType"]."</td>
                    
                    <td>"."Completeness: <b>" . $row["completeness"]. "</b><br>Accuracy: <b>". $row["accuracy"]. "</b><br>Speed: <b>". $row["speed"]. "</b><br>Considers the risk of COVID-19<br>
                    (Contact tracing, option for online transcations): <b>". $row["SCovid19"]. "</b></td>
                    
                    <td>"."Knowledge: <b>" . $row["knowledge"]. "</b><br>Attitude: <b>". $row["attitude"]. "</b><br>Grooming: <b>". $row["grooming"]. "</b><br>Use of PPE for COVID19<br>
                    (facemask, faceshield, etc): <b>". $row["PCOVID19"]. "</b></td>

                    <td>"."Location: <b>" . $row["location"]. "</b><br>Work Space: <b>". $row["workSpace"]. "</b><br>Cleanliness: <b>". $row["cleanliness"]. 
                    "</b><br>Equipment and Furnishing: <b>". $row["equipmentAndFurnishing"]. "</b><br>COVID19 Prevention and Control<br>
                    (disinfectant, social distancing, barriers, warning signs): <b>". $row["OCOVID19"]. "</b></td>

                    <td>"."Overall: <b>" . $row["overall"]. "</b></td>
                    <td style='width:10%'>"."Comments: <br><b>" . $row["comments"]. "</b></td>
                    <td style='width:6%'>". $row["logdt"]. "</td>

                    </tr>";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
?> 
        </tbody>  
      </table>  
	 
</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>  