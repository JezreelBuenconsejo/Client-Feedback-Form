<?php
class AccessDB extends CI_Model
{
	//checking if superadmin is the one logging in
	function superLogin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('superadmin');

		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}		
	}

	//checking if frontdesk officer is the on logging in
	function canLogin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('frontdeskofficer');

		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	//get name of the user logged in
	function getName($username,$password,$table){
		$name = "SELECT name FROM ".$table." WHERE username = "."'".$username."'"." AND password = "."'".$password."'";
		$query = $this->db->query($name);
		return $query->result_array();
	}

	//inserting data of newly Registered front desk officer
	function registerFDO($data){
		$this->db->insert('frontdeskofficer',$data);
        return true;
	}

	//get month
	function getMonth(){
		$date = "SELECT DISTINCT MONTHNAME(logdt) AS 'month' FROM userinfo";
		$query = $this->db->query($date);
		return $query->result_array();
	}
	//get year
	function getYear(){
		$date = "SELECT DISTINCT YEAR(logdt) AS 'year' FROM userinfo";
		$query = $this->db->query($date);
		return $query->result_array();
	}
	
	//retrieving client type
	function clientType($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sql= "SELECT clientType , count(clientType) as 'count' from userinfo WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";    
			$query = $this->db->query($sql)->result_array();
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sql= "SELECT clientType , count(clientType) as 'count' from userinfo WHERE YEAR(logdt) = '".$year."'";    
			$query = $this->db->query($sql)->result_array();
		}
		else
		{
			$sql= array('clientType','count(clientType) as count');    
			$query = $this->db->select($sql)->from('userinfo')->group_by('clientType')->get()->result_array();
		}
		return $query;
	}

	//SERVICES GROUP

	//Retrieving data of Completeness feedback
	function completeness($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlCompleteness = "SELECT completeness , count(completeness) as 'count' from services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by completeness UNION ALL SELECT 'Total' completeness, COUNT(completeness) FROM services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryCompleteness = $this->db->query($sqlCompleteness);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlCompleteness = "SELECT completeness , count(completeness) as 'count' from services WHERE YEAR(logdt) = '".$year."' group by completeness UNION ALL SELECT 'Total' completeness, COUNT(completeness) FROM services WHERE YEAR(logdt) = '".$year."'";
			$queryCompleteness = $this->db->query($sqlCompleteness);
		}
		else{
			$sqlCompleteness = "SELECT completeness , count(completeness) as 'count' from services group by completeness UNION ALL SELECT 'Total' completeness, COUNT(completeness) FROM services";
			$queryCompleteness = $this->db->query($sqlCompleteness);
		}

		return $queryCompleteness->result_array();
	} 

	//Retrieving data of Accuracy feedback
	function accuracy($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlAccuracy = "SELECT accuracy , count(accuracy) as 'count' from services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by accuracy UNION ALL SELECT 'Total' accuracy, COUNT(accuracy) FROM services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryAccuracy = $this->db->query($sqlAccuracy);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlAccuracy = "SELECT accuracy , count(accuracy) as 'count' from services WHERE YEAR(logdt) = '".$year."' group by accuracy UNION ALL SELECT 'Total' accuracy, COUNT(accuracy) FROM services WHERE YEAR(logdt) = '".$year."'";
			$queryAccuracy = $this->db->query($sqlAccuracy);
		}
		else
		{
			$sqlAccuracy = "SELECT accuracy , count(accuracy) as 'count' from services group by accuracy UNION ALL SELECT 'Total' accuracy, COUNT(accuracy) FROM services";
			$queryAccuracy = $this->db->query($sqlAccuracy);
		}
		return $queryAccuracy->result_array();
	} 

	//Retrieving data of Speed feedback
	function speed($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlSpeed = "SELECT speed , count(speed) as 'count' from services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by speed UNION ALL SELECT 'Total' speed, COUNT(speed) FROM services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$querySpeed = $this->db->query($sqlSpeed);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlSpeed = "SELECT speed , count(speed) as 'count' from services WHERE YEAR(logdt) = '".$year."' group by speed UNION ALL SELECT 'Total' speed, COUNT(speed) FROM services WHERE YEAR(logdt) = '".$year."'";
			$querySpeed = $this->db->query($sqlSpeed);
		}
		else
		{
			$sqlSpeed = "SELECT speed , count(speed) as 'count' from services group by speed UNION ALL SELECT 'Total' speed, COUNT(speed) FROM services";
			$querySpeed = $this->db->query($sqlSpeed);
		}
		return $querySpeed->result_array();
	} 

	//Retrieving data of SCovid19 feedback
	function SCovid19($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlSCovid19 = "SELECT SCovid19 , count(SCovid19) as 'count' from services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by SCovid19 UNION ALL SELECT 'Total' SCovid19, COUNT(SCovid19) FROM services WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$querySCovid19 = $this->db->query($sqlSCovid19);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlSCovid19 = "SELECT SCovid19 , count(SCovid19) as 'count' from services WHERE YEAR(logdt) = '".$year."' group by SCovid19 UNION ALL SELECT 'Total' SCovid19, COUNT(SCovid19) FROM services WHERE YEAR(logdt) = '".$year."'";
			$querySCovid19 = $this->db->query($sqlSCovid19);
		}
		else
		{
			$sqlSCovid19 = "SELECT SCovid19 , count(SCovid19) as 'count' from services group by SCovid19 UNION ALL SELECT 'Total' SCovid19, COUNT(SCovid19) FROM services";
			$querySCovid19 = $this->db->query($sqlSCovid19);
		}
		return $querySCovid19->result_array();
	}

	//PERSONNEL
	//Retrieving data of Knowledge feedback
	function knowledge($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlknowledge = "SELECT knowledge , count(knowledge) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'"." group by knowledge UNION ALL SELECT 'Total' knowledge, COUNT(knowledge) FROM personnel WHERE YEAR(logdt) = "."'".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryknowledge = $this->db->query($sqlknowledge);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlknowledge = "SELECT knowledge , count(knowledge) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' group by knowledge UNION ALL SELECT 'Total' knowledge, COUNT(knowledge) FROM personnel WHERE YEAR(logdt) = '".$year."'";
			$queryknowledge = $this->db->query($sqlknowledge);
		}
		else
		{
			$sqlknowledge = "SELECT knowledge , count(knowledge) as 'count' from personnel group by knowledge UNION ALL SELECT 'Total' knowledge, COUNT(knowledge) FROM personnel";
			$queryknowledge = $this->db->query($sqlknowledge);
		}
		return $queryknowledge->result_array();
	}

	//Retrieving data of attitude feedback
	function attitude($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlAttitude = "SELECT attitude , count(attitude) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by attitude UNION ALL SELECT 'Total' attitude, COUNT(attitude) FROM personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryAttitude = $this->db->query($sqlAttitude);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlAttitude = "SELECT attitude , count(attitude) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' group by attitude UNION ALL SELECT 'Total' attitude, COUNT(attitude) FROM personnel WHERE YEAR(logdt) = '".$year."'";
			$queryAttitude = $this->db->query($sqlAttitude);
		}
		else
		{
			$sqlAttitude = "SELECT attitude , count(attitude) as 'count' from personnel group by attitude UNION ALL SELECT 'Total' attitude, COUNT(attitude) FROM personnel";
			$queryAttitude = $this->db->query($sqlAttitude);
		}
		return $queryAttitude->result_array();
	}

	//Retrieving data of Grooming feedback
	function grooming($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlGrooming = "SELECT grooming , count(grooming) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by grooming UNION ALL SELECT 'Total' grooming, COUNT(grooming) FROM personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryGrooming = $this->db->query($sqlGrooming);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlGrooming = "SELECT grooming , count(grooming) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' group by grooming UNION ALL SELECT 'Total' grooming, COUNT(grooming) FROM personnel WHERE YEAR(logdt) = '".$year."'";
			$queryGrooming = $this->db->query($sqlGrooming);
		}
		else
		{
			$sqlGrooming = "SELECT grooming , count(grooming) as 'count' from personnel group by grooming UNION ALL SELECT 'Total' grooming, COUNT(grooming) FROM personnel";
			$queryGrooming = $this->db->query($sqlGrooming);
		}
		return $queryGrooming->result_array();
	}

	//Retrieving data of PCOVID19 feedback
	function PCOVID19($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlPCOVID19 = "SELECT PCOVID19 , count(PCOVID19) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by PCOVID19 UNION ALL SELECT 'Total' PCOVID19, COUNT(PCOVID19) FROM personnel WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryPCOVID19 = $this->db->query($sqlPCOVID19);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlPCOVID19 = "SELECT PCOVID19 , count(PCOVID19) as 'count' from personnel WHERE YEAR(logdt) = '".$year."' group by PCOVID19 UNION ALL SELECT 'Total' PCOVID19, COUNT(PCOVID19) FROM personnel WHERE YEAR(logdt) = '".$year."'";
			$queryPCOVID19 = $this->db->query($sqlPCOVID19);
		}
		else
		{
			$sqlPCOVID19 = "SELECT PCOVID19 , count(PCOVID19) as 'count' from personnel group by PCOVID19 UNION ALL SELECT 'Total' PCOVID19, COUNT(PCOVID19) FROM personnel";
			$queryPCOVID19 = $this->db->query($sqlPCOVID19);
		}
		return $queryPCOVID19->result_array();
	}

	//OFFICE
	//Retrieving data of Location feedback
	function location($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlLocation = "SELECT location , count(location) as 'count' from office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by location UNION ALL SELECT 'Total' location, COUNT(location) FROM office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryLocation = $this->db->query($sqlLocation);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlLocation = "SELECT location , count(location) as 'count' from office WHERE YEAR(logdt) = '".$year."' group by location UNION ALL SELECT 'Total' location, COUNT(location) FROM office WHERE YEAR(logdt) = '".$year."'";
			$queryLocation = $this->db->query($sqlLocation);
		}
		else
		{
			$sqlLocation = "SELECT location , count(location) as 'count' from office group by location UNION ALL SELECT 'Total' location, COUNT(location) FROM office";
			$queryLocation = $this->db->query($sqlLocation);
		}
		return $queryLocation->result_array();
	}

	//Retrieving data of Work Space feedback
	function workSpace($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlWorkSpace = "SELECT workSpace , count(workSpace) as 'count' from office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by workSpace UNION ALL SELECT 'Total' workSpace, COUNT(workSpace) FROM office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryWorkSpace = $this->db->query($sqlWorkSpace);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlWorkSpace = "SELECT workSpace , count(workSpace) as 'count' from office WHERE YEAR(logdt) = '".$year."' group by workSpace UNION ALL SELECT 'Total' workSpace, COUNT(workSpace) FROM office WHERE YEAR(logdt) = '".$year."'";
			$queryWorkSpace = $this->db->query($sqlWorkSpace);
		}
		else
		{
			$sqlWorkSpace = "SELECT workSpace , count(workSpace) as 'count' from office group by workSpace UNION ALL SELECT 'Total' workSpace, COUNT(workSpace) FROM office";
			$queryWorkSpace = $this->db->query($sqlWorkSpace);
		}
		return $queryWorkSpace->result_array();
	}

	//Retrieving data of cleanliness feedback
	function cleanliness($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlCleanliness = "SELECT cleanliness , count(cleanliness) as 'count' from office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by cleanliness UNION ALL SELECT 'Total' cleanliness, COUNT(cleanliness) FROM office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryCleanliness = $this->db->query($sqlCleanliness);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlCleanliness = "SELECT cleanliness , count(cleanliness) as 'count' from office WHERE YEAR(logdt) = '".$year."' group by cleanliness UNION ALL SELECT 'Total' cleanliness, COUNT(cleanliness) FROM office WHERE YEAR(logdt) = '".$year."'";
			$queryCleanliness = $this->db->query($sqlCleanliness);
		}
		else
		{
			$sqlCleanliness = "SELECT cleanliness , count(cleanliness) as 'count' from office group by cleanliness UNION ALL SELECT 'Total' cleanliness, COUNT(cleanliness) FROM office";
			$queryCleanliness = $this->db->query($sqlCleanliness);
		}
		return $queryCleanliness->result_array();
	}

	//Retrieving data of Equipment and Furnishing feedback
	function equipmentAndFurnishing($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlEquipmentAndFurnishing = "SELECT equipmentAndFurnishing , count(equipmentAndFurnishing) as 'count' from office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by equipmentAndFurnishing UNION ALL SELECT 'Total' equipmentAndFurnishing, COUNT(equipmentAndFurnishing) FROM office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryEquipmentAndFurnishing = $this->db->query($sqlEquipmentAndFurnishing);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlEquipmentAndFurnishing = "SELECT equipmentAndFurnishing , count(equipmentAndFurnishing) as 'count' from office WHERE YEAR(logdt) = '".$year."' group by equipmentAndFurnishing UNION ALL SELECT 'Total' equipmentAndFurnishing, COUNT(equipmentAndFurnishing) FROM office WHERE YEAR(logdt) = '".$year."'";
			$queryEquipmentAndFurnishing = $this->db->query($sqlEquipmentAndFurnishing);
		}
		else
		{
			$sqlEquipmentAndFurnishing = "SELECT equipmentAndFurnishing , count(equipmentAndFurnishing) as 'count' from office group by equipmentAndFurnishing UNION ALL SELECT 'Total' equipmentAndFurnishing, COUNT(equipmentAndFurnishing) FROM office";
			$queryEquipmentAndFurnishing = $this->db->query($sqlEquipmentAndFurnishing);
		}
		return $queryEquipmentAndFurnishing->result_array();
	}

	//Retrieving data of OCOVID19 feedback
	function OCOVID19($month = '',$year = '')
	{
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlOCOVID19 = "SELECT OCOVID19 , count(OCOVID19) as 'count' from office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by OCOVID19 UNION ALL SELECT 'Total' OCOVID19, COUNT(OCOVID19) FROM office WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryOCOVID19 = $this->db->query($sqlOCOVID19);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlOCOVID19 = "SELECT OCOVID19 , count(OCOVID19) as 'count' from office WHERE YEAR(logdt) = '".$year."' group by OCOVID19 UNION ALL SELECT 'Total' OCOVID19, COUNT(OCOVID19) FROM office WHERE YEAR(logdt) = '".$year."'";
			$queryOCOVID19 = $this->db->query($sqlOCOVID19);
		}
		else
		{
			$sqlOCOVID19 = "SELECT OCOVID19 , count(OCOVID19) as 'count' from office group by OCOVID19 UNION ALL SELECT 'Total' OCOVID19, COUNT(OCOVID19) FROM office";
			$queryOCOVID19 = $this->db->query($sqlOCOVID19);
		}
		return $queryOCOVID19->result_array();
	}
	
	//OVERALL
	//Retrieving data of Overall feedback
	function overall($month = '',$year = ''){
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlOverall = "SELECT overall , count(overall) as 'count' from overall WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."' group by overall UNION ALL SELECT 'Total' overall, COUNT(overall) FROM overall WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryOverall = $this->db->query($sqlOverall);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlOverall = "SELECT overall , count(overall) as 'count' from overall WHERE YEAR(logdt) = '".$year."' group by overall UNION ALL SELECT 'Total' overall, COUNT(overall) FROM overall WHERE YEAR(logdt) = '".$year."'";
			$queryOverall = $this->db->query($sqlOverall);
		}
		else
		{
			$sqlOverall = "SELECT overall , count(overall) as 'count' from overall group by overall UNION ALL SELECT 'Total' overall, COUNT(overall) FROM overall";
			$queryOverall = $this->db->query($sqlOverall);
		}
		return $queryOverall->result_array();
	}

	//COMMENTS
	//Retrieving Comments
	function comments($month = '',$year = ''){
		if($month != '' && $month != 'All months' && $year != ''){
			$sqlComments = "SELECT comments FROM `overall` WHERE YEAR(logdt) = '".$year."' AND MONTHNAME(logdt) = '".$month."'";
			$queryComments = $this->db->query($sqlComments);
		}
		else if($month != '' && $month == 'All months' && $year != ''){
			$sqlComments = "SELECT comments FROM `overall` WHERE YEAR(logdt) = '".$year."'";
			$queryComments = $this->db->query($sqlComments);
		}
		else
		{
			$sqlComments = "SELECT comments FROM `overall`";
			$queryComments = $this->db->query($sqlComments);
		}
		return $queryComments;
	}

	
}
?>
