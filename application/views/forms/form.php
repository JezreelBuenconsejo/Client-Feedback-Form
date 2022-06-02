<?php
/**
    *For any concerns you can contact the developers:
    *Jezreel Jose B. Buenconsejo 
    *Email: 201880436@psu.palawan.edu.ph 

    *Reven Jeremiah Maglaque
    *Email: 201880472@psu.palawan.edu.ph

    *Jesfert Roy Pabon
    *Email: 201880186@psu.palawan.edu.ph
*/
?>
<form method="POST" target="_self" action="assets/db/addData.php">
    <div class="row" style="width: auto;text-align: center;">
        <div class="col text-nowrap" style="width: 100%;padding-right: 0px;padding-left: 0px;text-align: left;">
            <strong type="text" style="text-align: left;margin-left: 25%;">Name (Optional):</strong>
            <input class="form-control" type="text" id="name" style="width: 50%;font-size: 14px;margin-left: 25%;text-align: left;" name="name">
        </div>
        <div class="col"  style="width: 100%;padding-left: 0;text-align: left;"> 
            <label style="margin-left: 25%;text-align: left;padding-left: 0px;" >
                <b>Gender</b>
            </label>
            <br>
            <select  class="form-control" id="gender" name="gender" style="width: 20%;font-size: 14px;text-align: left;padding-left: 0px; display:inline;margin-left: 25%;" onchange="otherGender1()">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
            <input id="othersInput" class="form-control" type="text" style="width: 30%;font-size: 14px;text-align: left;display: inline; visibility: hidden;" name="othersInput" />
        </div>
    </div>
    <div class="row" style="width: auto;text-align: center;">
        <div class="col text-nowrap" style="width: 100%;padding-right: 0px;padding-left: 0px;text-align: left;">
            <strong type="text" style="text-align: left;margin-left: 25%;">Office Visited:&nbsp;</strong>
            <input class="form-control" type="text" id="officeVisited" style="width: 50%;font-size: 14px;margin-left: 25%;text-align: left;" name="officeVisited" required="" value="ICT" readonly>
        </div>

        <div class="col text-nowrap" style="width: 100%;padding-left: 0;text-align: left;">
            <label style="margin-left: 25%;text-align: left;padding-left: 0px;" ><b>Frontdesk Officer</b></label><br>
            <select  class="form-control" style="width: 50%;font-size: 14px;text-align: left;padding-left: 0px; display:inline;margin-left: 25%;" id="frontdeskOfficer" name="frontdeskOfficer">
                <?php
                require('assets/db/dbconfig.php');
                $sql = "SELECT name FROM frontdeskofficer";
                $result = $conn->query($sql);
                if (!empty($result) && $result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<option>".$row["name"]. "</option>";
                    }
                }
                else
                {
                    $sql = "SELECT name FROM superadmin";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<option>".$row["name"]. "</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class="row" style="width: auto;text-align: center;">
        <div class="col text-nowrap" style="width: 100%;padding-right: 0px;padding-left: 0px;text-align: left;">
            <strong type="text" style="text-align: left;margin-left: 25%;">Date Served:</strong>
            <input class="form-control" id="dateServed" type="date" style="width: 50%;font-size: 14px;margin-left: 25%;" name="dateServed" required="">
        </div>

        <div class="col text-nowrap" style="width: 100%;padding-left: 0;text-align: left;">
            <label style="margin-left: 25%;text-align: left;padding-left: 0px;">
                <b>Client Type</b>
            </label>
            <br>
            <select  class="form-control" id="clientType" name="clientType" style="width: 50%;font-size: 14px;text-align: left;padding-left: 0px; display:inline;margin-left: 25%;">
                <option>Student</option>
                <option>Parent/Guardian of PSU Student</option>
                <option>PSU Faculty</option>
                <option>PSU Staff</option>
                <option>Alumnus/Alumna</option>
                <option>Private Sector Visitor</option>
                <option>Government Agency Visitor</option>
                <option>Contractor/Supplier</option>
                <option>Others</option>
            </select>
        </div>
    </div>
        
    <div class="row">
        <div class="col" style="text-align: center;">
            <strong type="text">Campus:&nbsp;</strong>
            <input class="form-control" type="text" id="campus" style="width: 20%;font-size: 14px;margin-left: 40%;text-align: left;margin-bottom: 5px;" name="campus" required="">
        </div>
    </div>

    <p style="text-align: center;"><strong>Instruction: </strong>Please rate on each item based from your actual experience at PSU where you had transaction, select your appropriate answer/feedback</p>
        
    <div class="row">
        <div class="col-md-4" id="feedback">
            <h5 style="margin-right: 117px;margin-left: 10%;text-align: left;">I. Services</h5>
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Completeness</label>
                        <select  class="dropdownFeedback" id="completeness" name="completeness" style="display:inline; margin-left:5px;" value="Click here">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Accuracy</label>
                        <select  class="dropdownFeedback" id="accuracy" name="accuracy" style="display:inline; margin-left:41px;">
                            <option value="" selected disabled hidden>Click here</option>     
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
                
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Speed</label>
                        <select  class="dropdownFeedback" id="speed" name="speed" style="display:inline; margin-left:59px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
                
            <ul>
                <li>
                    <div class="divFeedback">
                    <label style="display:inline;">Considers the risk of COVID-19 <br> (Contact tracing, option for online transcations)</label>
                        <select  class="dropdownFeedback" id="SCOVID19" name="SCOVID19" style="display:inline;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-md-4" id="feedback">
            <h5 style="margin-right: 117px;margin-left: 10%;text-align: left;">II. Personnel</h5>
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Knowledge</label>
                        <select  class="dropdownFeedback" id="knowledge" name="knowledge" style="display:inline; margin-left:5px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Attitude</label>
                        <select  class="dropdownFeedback" id="attitude" name="attitude" style="display:inline; margin-left: 25px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
  
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Grooming</label>
                        <select  class="dropdownFeedback" id="grooming" name="grooming" style="display:inline; margin-left:10px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
  
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Use of PPE for COVID19(facemask, faceshield, etc)</label>
                        <select  class="dropdownFeedback" id="PCOVID19" name="PCOVID19" style="display:inline;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>

        </div>
        <div class="col-md-4" id="feedback">
            <h5 style="margin-right: 117px;margin-left: 10%;text-align: left;">III. Office</h5>
            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Location</label>
                        <select  class="dropdownFeedback" id="location" id="location" style="display:inline; margin-left:130px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
            
            <ul>
                <li>
                    <div class="divFeedback">
                      <label style="display:inline;">Work Space</label>
                       <select  class="dropdownFeedback" id="workSpace" name="workSpace" style="display:inline; margin-left: 105px;">
                          <option value="" selected disabled hidden>Click here</option>
                           <option>Very Good</option>
                           <option>Good</option>
                           <option>Fair</option>
                           <option>Poor</option>
                           <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  

            <ul>
                <li>
                    <div class="divFeedback">
                        <label style="display:inline;">Cleanliness</label>
                        <select  class="dropdownFeedback" id="cleanliness" name="cleanliness" style="display:inline; margin-left:110px;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
  
            <ul>
                <li>
                    <div class="divFeedback">
                      <label style="display:inline; margin-right:5px;">Equipment & Furnishing</label>
                       <select  class="dropdownFeedback" id="equipmentAndFurnishing" name="equipmentAndFurnishing" style="display:inline; margin-left:10px;">
                          <option value="" selected disabled hidden>Click here</option>
                           <option>Very Good</option>
                           <option>Good</option>
                           <option>Fair</option>
                           <option>Poor</option>
                           <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>  
  
            <ul>
                <li>
                    <div class="divFeedback">
                    <label style="display:inline;">COVID19 Prevention and Control <br> (disinfectant, social distancing, barriers, warning signs)</label>
                       <select  class="dropdownFeedback" id="OCOVID19" name="OCOVID19" style="display:inline;">
                            <option value="" selected disabled hidden>Click here</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Fair</option>
                            <option>Poor</option>
                            <option>Very Poor</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
            
        <div class="divFeedback" id="feedback">
            <h5 id="cssOverall" >IV. Overall</h5> 
            <label id="cssOverall" >Overall, how would you rate your experience with our services?</label>
            <select  class="dropdownFeedback" id="overall" name="overall" style="display:inline;">
                <option value="" selected disabled hidden>Click here</option>    
                <option>Very Good</option>
                <option>Good</option>
                <option>Fair</option>
                <option>Poor</option>
                <option>Very Poor</option>
            </select>
            <textarea id="cssOveralltextarea" class="form-control" id="comments" style="" name="comments"></textarea>
        </div>
    </div>

    <button class="btn btn-primary" type="submit" style="text-align: center;margin-left: 45%;" name="submit" value="Submit">Submit</button>

</form>

<a href="<?php echo base_url()?>data">
    <button class="btn btn-primary" type="submit" style="text-align: center;margin-left: 85%;" name="data" value="data">Show Data</button>
</a>

<script src="assets/js/validation.js" ></script>
<script src="assets/js/getdate.js"></script>
<script src="assets/js/otherGender.js" ></script>
