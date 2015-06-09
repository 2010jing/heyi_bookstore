<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopcart extends CI_Controller {

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
		$this->load->view('shopcart');
	}

	public function add(){
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