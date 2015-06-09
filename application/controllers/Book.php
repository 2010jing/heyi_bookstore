<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
    	$this->load->library('cart');
  	}
  	
	public function index()
	{
		$this->load->view('books');
	}

	public function search(){

		if(!empty($_GET['keyword'])){
			$this->load->model('Books_model');
			$result = $this->Books_model->search();
			$data['searchresult'] = $result;
			$this->load->view('searchresult',$data);
		}
		
	}


	// search base on  major grade semester
	public function majorSearch(){
		$this->load->model('Books_model');
		$result = $this->Books_model->majorSearch();
		$data['searchresult'] = $result;
		$this->load->view('majorsearch',$data);
	}



	public function detail($bid){

		$this->load->model('Books_model');
		$result = $this->Books_model->bookDetail($bid);
		if(empty($result)){
			$this->load->view('404');
		}else{
			$data['book'] = $result;
			$this->load->view('bookdetail',$data);
		}
			
	}

	public function tt(){
		$this->load->model('Books_model');
		$result = $this->Books_model->tt();
		
	}

	public function cart(){
		$bid = $_POST['id'];
		$num = $_POST['num'];
		$type = $_POST['type'];
		$this->load->model('Books_model');
		$result = $this->Books_model->bookDetail($bid);
		if(!empty($result)){
			$cart = new Cart($bid,$result->booktitle,$result->bookimg,$result->price,$num,$type);
		}else{
			redirect(base_url(''));

		}

	}



}