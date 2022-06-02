<?php
class Forms extends CI_Controller{

    //Function for viewing the Feedback Form landing Page(Main Page)
    public function view($page='index',$data='forms/form')
    {
        if(!file_exists(APPPATH.'views/templates/'.$page.'.php'))
        {
            show_404();
        }
        $show['showPage'] = $this->load->view($data,null,true);
        $this->load->view('templates/header');
        $this->load->view('templates/'.$page,$show);
        $this->load->view('templates/footer');
    }

    public function form()
	{
		$this->load->model("AccessDB");
		$data['form'] = $this->load->view('forms/form');
	}
}
?>