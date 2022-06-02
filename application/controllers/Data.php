<?php
class Data extends CI_Controller{
    
    //viewing of Login Page, List of Submitted Feedback, Registration Page and Summary of Client Feedback
    public function index($data = 'data/login',$fbData=array('Client'=>'','Services'=>'','Personnel'=>'','Office'=>'','Overall'=>'','Comments'=>'','Table'=>'',"getMonth" => '',"getYear" => '',"showDate" => ''))
    {
        $summary['CTarr'] = $fbData['Client'];
        $summary['Services'] = $fbData['Services'];
        $summary['Personnel'] = $fbData['Personnel'];
        $summary['Office'] = $fbData['Office'];
        $summary['Overall'] = $fbData['Overall'];
        $summary['Comments'] = $fbData['Comments'];
        $summary['Table'] = $fbData['Table'];
        $summary['getMonth'] = $fbData['getMonth'];
        $summary['getYear'] = $fbData['getYear'];
        $summary['showDate'] = $fbData['showDate'];
        $show['showPage'] = $this->load->view($data,$summary,true);
        $this->load->view('templates/header');
        $this->load->view('templates/index',$show);
        $this->load->view('templates/footer');
        
    } 

    //Login Validation
    public function login_validation(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('accessDB');
        if($this->accessDB->superLogin($username,$password)){
            $table = 'superadmin';
            $getName[] =$this->accessDB->getName($username ,$password,$table );
            $data;
            foreach($getName as $gn){
                $data = $gn;
            }
            $name[[]];
            $name[0][0] = '';
            foreach($data as $dt){
                $name[0][0] = $dt['name'];
            }
            $fn = $name[0][0];
            $session_data = array(
                'username' => $username,
                'fn' => $fn,
                'summary' => '',
                'register' => ''
            );
            $this->session->set_userdata($session_data);
            redirect(base_url(). 'data/showData');
        }
        else if($this->accessDB->canLogin($username,$password)){
            $table = 'frontdeskofficer';
            $getName[] =$this->accessDB->getName($username ,$password,$table );
            $data;
            foreach($getName as $gn){
                $data = $gn;
            }
            $name[[]];
            $name[0][0] = '';
            foreach($data as $dt){
                $name[0][0] = $dt['name'];
            }
            $fn = $name[0][0];
            $session_data = array(
                'username' => $username,
                'fn' => $fn,
                'summary' => 'hidden',
                'register' => 'hidden'
            );
            $this->session->set_userdata($session_data);
            redirect(base_url(). 'data/showData');
        }
        else{
            $this->session->set_flashdata('error','Invalid Username or Password');
            redirect(base_url().'data');
        }
    }
    
    //Viewing of Registration Page
    function registration(){
        $this->index($data = 'data/Registration');
    }

    //Inserting newly Registered Frontdesk officer
    function register(){
       	$username=$this->input->post('username');
		$password=$this->input->post('password');
		$name=$this->input->post('fname');
        $data = array('username' => $username, 'password' => $password, 'name' => $name);
        $this->load->model('accessDB');
		$response=$this->accessDB->registerFDO($data);
		if($response==true)
        {
	        echo '<script type="text/javascript">'; 
            echo 'alert("Frontdesk Officer Successfully Created!");'; 
            echo 'window.location.href = "'.base_url(). 'data/showData'.'";';
            echo '</script>';;
		}
		else
        {
			$this->session->set_flashdata('error','Error');
		}
		
    }
    
    //logout function
    function logout(){
        $this->session->unset_userdata('fn');
        redirect(base_url());
    }

    //viewing of List of Submitted Feedback
    public function showData(){
        if($this->session->userdata('username') != ''){
            $this->index($data = 'data/showData');
            
        }
        else{
            redirect(base_url().'data');
        }
        
    }

    //Showing Summary of Client Feedback
    public function showSummary()
    {
        if (isset($_POST['getDate'])) 
        {
            if($this->session->userdata('username') != '')
            {
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $username = $this->session->userdata('username');
                $this->load->model('accessDB');
                $arr['Client'] = $this->clientType($month,$year);
                $arr['Services'] = $this->services($month,$year);
                $arr['Personnel'] = $this->personnel($month,$year);
                $arr['Office'] = $this->office($month,$year);
                $arr['Overall'] = $this->overall($month,$year);
                $arr['Comments'] = $this->comments($month,$year);
                $arr['Table'] = 'data/dataTable';
                $arr['getMonth'] = $this->accessDB->getMonth();
                $arr['getYear'] = $this->accessDB->getYear();
                $arr['showDate'] = $month." ".$year;
                $this->index('data/Summary',$arr);
            }
            else
            {
            redirect(base_url().'data');
            }
        } 
        else 
        {
            if($this->session->userdata('username') != '')
            {
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $username = $this->session->userdata('username');
                $this->load->model('accessDB');
                $arr['Client'] = $this->clientType();
                $arr['Services'] = $this->services();
                $arr['Personnel'] = $this->personnel();
                $arr['Office'] = $this->office();
                $arr['Overall'] = $this->overall();
                $arr['Comments'] = $this->comments();
                $arr['Table'] = 'data/dataTable';
                $arr['getMonth'] = $this->accessDB->getMonth();
                $arr['getYear'] = $this->accessDB->getYear();
                $arr['showDate'] = "All Time Records";
                $this->index('data/Summary',$arr);
            }
            else
            {
            redirect(base_url().'data');
            }
        }
      
        
    }

    //viewing of list of client type and total number of clients
    public function clientType($month = '',$year = '')
    {
        $this->load->model('accessDB');
            $client[] = $this->accessDB->clientType($month,$year);
            $data = Array();
            foreach($client as $row)
            {
			    $data = $row;	
	    	}
            $CTarr = array();
            $CTarr[0] = 'Student : 0';
            $CTarr[1] = 'Parent : 0';
            $CTarr[2] = 'PSU Faculty : 0';
            $CTarr[3] = 'PSU Staff : 0';
            $CTarr[4] = 'Others : 0';
            $CTarr[5] = 'Alumnus/Alumna : 0';
            $CTarr[6] = 'Private Sector Visitor : 0';
            $CTarr[7] = 'Gov. Agency Visitor : 0';
            $CTarr[8] = 'Contractor/Supplier : 0';
            $CTarr[9] = 0;
            foreach($data as $clientType)
            {
                if($clientType['clientType'] == 'Student'){
                    $CTarr[0] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Parent'){
                    $CTarr[1] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'PSU Faculty'){
                    $CTarr[2] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'PSU Staff'){
                    $CTarr[3] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Others'){
                    $CTarr[4] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Alumnus/Alumna'){
                    $CTarr[5] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Private Sector Visitor'){
                    $CTarr[6] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Government Agency Visitor'){
                    $CTarr[7] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
                else if($clientType['clientType'] == 'Contractor/Supplier'){
                    $CTarr[8] = $clientType['clientType'].' : '.$clientType['count'];
                    $CTarr[9] = $CTarr[9] + $clientType['count'];
                }
            }
            
            return $CTarr;
    }

    //viewing of the tally of Services
    public function services($month = '',$year = '')
    {
        
        $this->load->model('accessDB');
        $completeness[] = $this->accessDB->completeness($month,$year);
        $accuracy[] = $this->accessDB->accuracy($month,$year);
        $speed[] = $this->accessDB->speed($month,$year);
        $SCovid19[] = $this->accessDB->SCovid19($month,$year);

        $Sarr = [[]];
        $Sarr[0] = $this->convertArr($completeness,'completeness');
        $Sarr[1] = $this->convertArr($accuracy,'accuracy');
        $Sarr[2] = $this->convertArr($speed,'speed');
        $Sarr[3] = $this->convertArr($SCovid19,'SCovid19');
        
        
        $Sarr[4][0] = $Sarr[0][5] + $Sarr[1][5] + $Sarr[2][5] + $Sarr[3][5];

        $totalAve = 0;
        for($i = 0; $i < 4; $i++){
            if($Sarr[$i][6] != 'N/A'){
                $totalAve = $totalAve + $Sarr[$i][6];
            }
        }

        $Sarr[4][1] = 0;
        if(($Sarr[0][9] + $Sarr[1][9] + $Sarr[2][9] + $Sarr[3][9]) != 0){
            $Sarr[4][1] = $totalAve / ($Sarr[0][9] + $Sarr[1][9] + $Sarr[2][9] + $Sarr[3][9]);
        }
        $Sarr[4][2] = $this->descriptive($Sarr[4][1]);
        $Sarr[4][3] = $this->colorChange($Sarr[4][1]);

        return $Sarr;
    }

    //viewing of the tally of Personnel
    public function personnel($month = '',$year = '')
    {
        $this->load->model('accessDB');
        $knowledge[] = $this->accessDB->knowledge($month,$year);
        $attitude[] = $this->accessDB->attitude($month,$year);
        $grooming[] = $this->accessDB->grooming($month,$year);
        $PCOVID19[] = $this->accessDB->PCOVID19($month,$year);

        $Parr = [[]];
        $Parr[0] = $this->convertArr($knowledge,'knowledge');
        $Parr[1] = $this->convertArr($attitude,'attitude');
        $Parr[2] = $this->convertArr($grooming,'grooming');
        $Parr[3] = $this->convertArr($PCOVID19,'PCOVID19');
        
        $Parr[4][0] = $Parr[0][5] + $Parr[1][5] + $Parr[2][5] + $Parr[3][5];

        $totalAve = 0;
        for($i = 0; $i < 4; $i++){
            if($Parr[$i][6] != 'N/A'){
                $totalAve = $totalAve + $Parr[$i][6];
            }
        }

        $Parr[4][1] = 0;
        if(($Parr[0][9] + $Parr[1][9] + $Parr[2][9] + $Parr[3][9]) != 0){
            $Parr[4][1] = $totalAve / ($Parr[0][9] + $Parr[1][9] + $Parr[2][9] + $Parr[3][9]);
        }
        $Parr[4][2] = $this->descriptive($Parr[4][1]);
        $Parr[4][3] = $this->colorChange($Parr[4][1]);
        return $Parr;
    }

    //viewing of the tally of Office
    public function office($month = '',$year = '')
    {
        $this->load->model('accessDB');
        $location[] = $this->accessDB->location($month,$year);
        $workSpace[] = $this->accessDB->workSpace($month,$year);
        $cleanliness[] = $this->accessDB->cleanliness($month,$year);
        $equipmentAndFurnishing[] = $this->accessDB->equipmentAndFurnishing($month,$year);
        $OCOVID19[] = $this->accessDB->OCOVID19($month,$year);

        $Oarr = [[]];
        $Oarr[0] = $this->convertArr($location,'location');
        $Oarr[1] = $this->convertArr($workSpace,'workSpace');
        $Oarr[2] = $this->convertArr($cleanliness,'cleanliness');
        $Oarr[3] = $this->convertArr($equipmentAndFurnishing,'equipmentAndFurnishing');
        $Oarr[4] = $this->convertArr($OCOVID19,'OCOVID19');
        
        $Oarr[5][0] = $Oarr[0][5] + $Oarr[1][5] + $Oarr[2][5] + $Oarr[3][5] + $Oarr[4][5];

        $totalAve = 0;
        for($i = 0; $i < 5; $i++){
            if($Oarr[$i][6] != 'N/A'){
                $totalAve = $totalAve + $Oarr[$i][6];
            }
        }

        $Oarr[5][1] = 0;
        if(($Oarr[0][9] + $Oarr[1][9] + $Oarr[2][9] + $Oarr[3][9] + $Oarr[4][9]) != 0){
            $Oarr[5][1] = $totalAve / ($Oarr[0][9] + $Oarr[1][9] + $Oarr[2][9] + $Oarr[3][9] + $Oarr[4][9]);
        }
        $Oarr[5][2] = $this->descriptive($Oarr[5][1]);
        $Oarr[5][3] = $this->colorChange($Oarr[5][1]);
        return $Oarr;
    }

    //viewing of the tally of Overall
    public function overall($month = '',$year = '')
    {
        $this->load->model('accessDB');
        $overall[] = $this->accessDB->overall($month,$year);

        $OverArr = [[]];
        $OverArr[0] = $this->convertArr($overall,'overall');
        
        $OverArr[1][0] = $this->descriptive($OverArr[0][6]);
        $OverArr[1][1] = $this->colorChange($OverArr[0][6]);
        return $OverArr;
    }

    //viewing of the tally of comments
    public function comments($month = '',$year = '')
    {
        $this->load->model('accessDB');
        $comments = $this->accessDB->comments($month,$year);
        return $comments;
    }
    
    //changing of color of data cells of the results
    public function colorChange($ave)
    {
        $color;
        if($ave  >= 4.51){
            $color = "#A9D08E";
        }
        else if($ave >= 3.51 && $ave <=4.5){
            $color = "#C6E0B4";
        }
        else if($ave >= 2.51 && $ave <=3.5){
            $color = "#F2F2F2";
        }
        else if($ave >= 1.51 && $ave <=2.5){
            $color = "#BFBFBF";
        }
        else if($ave <=1.5 & $ave > 0){
            $color = "#A6A6A6";
        }
        else{
            $color = "#FFFFFF";
        }
        return $color;
    }

    //Calculating the Total, Average of the Tally in Summary of Feedback
    public function convertArr($arr,$header ='')
    {
        $data;
        foreach($arr as $row)
        {
			$data = $row;	
	    }
        $Sarr = [];
        $Sarr[0] = 0; // Very Poor
        $Sarr[1] = 0; // Poor
        $Sarr[2] = 0; // Fair
        $Sarr[3] = 0; // Good
        $Sarr[4] = 0; // Very Good
        $Sarr[5] = 0; // Total
        $Sarr[6] = 0; // Average
        $Sarr[7] = 0; // descriptive
        $Sarr[8] = 0; // counter
        $Sarr[9] = 0; // counter2.0
        foreach($data as $SC)
        {
            if($SC[$header] == 'Very Poor'){
                $Sarr[0] = $SC['count']*1;
                $Sarr[5] = $Sarr[5] + $Sarr[0];
                $Sarr[8] = $Sarr[8] + $SC['count'];
            }
            else if($SC[$header] == 'Poor'){
                $Sarr[1] = $SC['count']*2;
                $Sarr[5] = $Sarr[5] + $Sarr[1];
                $Sarr[8] = $Sarr[8] + $SC['count'];
            }
            else if($SC[$header] == 'Fair'){
                $Sarr[2] = $SC['count']*3;
                $Sarr[5] = $Sarr[5] + $Sarr[2];
                $Sarr[8] = $Sarr[8] + $SC['count'];
            }
            else if($SC[$header] == 'Good'){
                $Sarr[3] = $SC['count']*4;
                $Sarr[5] = $Sarr[5] + $Sarr[3];
                $Sarr[8] = $Sarr[8] + $SC['count'];
            }
            else if($SC[$header] == 'Very Good'){
                $Sarr[4] = $SC['count']*5;
                $Sarr[5] = $Sarr[5] + $Sarr[4];
                $Sarr[8] = $Sarr[8] + $SC['count'];
            }  
        }
        if($Sarr[8] != 0){
        $Sarr[6] = $Sarr[5] / $Sarr[8];
        $Sarr[9] = 1;
        }
        else if($Sarr[8] == 0){
            $Sarr[6] = 'N/A';
        }
        $Sarr[7] = $this->descriptive($Sarr[6]);
        return $Sarr;
    }

    //creating of description according to the calculated Average
    public function descriptive($ave)
    {
        $desc;
        if($ave >= 4.51 && $ave != 0 && $ave != 'N/A')
        {
            $desc = 'Very Good';
        }
        else if(($ave >= 3.51 && 4.5) && $ave != 0 && $ave != 'N/A')
        {
            $desc = 'Good';
        }
        else if(($ave >= 2.51 && 3.5) && $ave != 0 && $ave != 'N/A')
        {
            $desc = 'Fair';
        }
        else if(($ave >= 1.51 && 2.5) && $ave != 0 && $ave != 'N/A')
        {
            $desc = 'Poor';
        }
        else if($ave <= 1.5 && $ave != 0 && $ave != 'N/A')
        {
            $desc = 'Very Poor';
        }
        else if($ave == 'N/A' || $ave == null || $ave == 0){
            $desc = 'N/A';
        }
        return $desc;
    } 

    public function printPDF(){

    }


}
?>