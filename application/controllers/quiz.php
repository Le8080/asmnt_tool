<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['page_title'] = 'Quiz Maker';    
        $data['page_css'] = 'quiz';
		$g = array();	$g['test'] = 'test';
        #material_design Components
        $data['material_com'] = array('card','form-field');
		$uq =  $this->QL->get_user_quiz(0);
		
		//Load view
        $this->load->view('head', $data);
		$this->load->view('layout');
		//load create new quiz
		if(empty($uq->result_array)){
			$this->create_quiz();
		}else{
			$this->load->view('/quiz/index',$g);
		}
	
		$this->load->view('footer');
	}
		
	public function create_quiz(){
		$this->load->view('/quiz/create');
	}
	public function display_quiz(){

	}
    
}
