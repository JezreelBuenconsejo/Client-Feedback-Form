<h5>Logged in: <?php echo $this->session->userdata('fn') ?> </h5>

<table id="myTable" class="table table-striped" style="width:100%;">  
  <thead>  
    <tr>  
    <th>Log Date</th>
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
    </tr>  
  </thead> 
   
  <tbody>  
    <?php
      require('assets/db/dbconfig.php');
      $sql = "SELECT * FROM userinfo\n"

      . "INNER JOIN services ON userinfo.userID = services.servicesID\n"

      . "INNER JOIN personnel on services.servicesID = personnel.personnelID\n"

      . "INNER JOIN office ON personnel.personnelID = office.officeID\n"

      . "INNER JOIN overall ON office.officeID = overall.overallID";
      $result = $conn->query($sql);
          
      if (!empty($result) && $result->num_rows > 0) 
      {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
          echo  "<tr><td style='width:6%'>". $row["logdt"]. "</td><td>" . $row["name"]."</td><td>" . $row["gender"]."</td>
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
          </tr>";
        }
      } 
      else 
      {
        echo "0 results";
      }
      $conn->close();
    ?> 
  </tbody>  
</table> 

<div>
<a href="<?php echo base_url()?>data/logout"><button class="btn btn-primary" type="button">Logout</button></a>
<a href="<?php echo base_url()?>data/showSummary" <?php echo $this->session->userdata('summary') ?> ><button class="btn btn-primary" type="button" style="float:right;margin-left:1%;">Summary</button></a>  
<a href="<?php echo base_url()?>data/Registration" <?php echo $this->session->userdata('register') ?> ><button class="btn btn-primary" type="button" style="float:right;">Register a Frontdesk Officer</button></a> 
</div>

<script>
  $(document).ready(function(){
  $('#myTable').dataTable();
  });
</script>
 