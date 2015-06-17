<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
  	}

	public function index()
	{
		if(!$this->session->userdata('name')){
			$this->load->view('login');
		}else{
			redirect(base_url());
		}
		
	}

	public function register(){
		if(!$this->session->userdata('name')){
			$this->load->view('register');
		}else{
			redirect(base_url());
		}
		
	}

    //登录
	function signin(){
		if(!empty($_POST)){
			$this->load->model('User_model');
			$result = $this->User_model->getUser();
			if($result == null){
				//echo "nonono...";
				//redirect(base_url(),'reload');
				redirect(base_url('auth/index'),'reload');

			}else{
					$this->session->set_userdata('name',$result->name);
					$this->session->set_userdata('email',$result->email);
					$this->session->set_userdata('uid',$result->id);
					$this->session->set_userdata('role',$result->role);
					redirect(base_url(),'reload');
			}
		}else{
			
			redirect(base_url('auth/index'),'reload');
		}
	}



	//注册
	function signup(){
    	if($this->session->userdata('name')){
    		redirect(base_url(),'reload');
    	}else{
    		if($_POST){
				$this->load->model('User_model');
	    		$result = $this->User_model->checkValidRegister();
	    		if(empty($result)){
	    			$id_num = $this->User_model->registerUser(); //插入返回结果 true or false

	    			if($id_num != 0){
	    				$name = trim($_POST['name']);
	    				$email = trim($_POST['email']);	    				
	    				$division = trim($_POST['division']);
	    				$tel = trim($_POST['tel']);
						$str = $name.$email.$division.$tel;
						$token = $this->encode_text($str,"heyi_books","encode",3600);
						$link=base_url()."auth/activeUser/".$id_num."/".$token; 
						$subject = "账号激活 -- 合一书店!";
						$message = "<h3>Welcome ".$name.",</h3><h4>   <br> Please click below link to active your account:<br><a  target='_blank' href='".$link."'>".$link."</a><br> @合一书店!";
				    	$type = "active";
			            $this->sendEmail($email,$subject,$message,$type); 
			            //$this->sendEmail('sthforuic@163.com',$subject,$message,'hello');
	    			}else{
	    				echo "insert failed";
	    			}

	    		}else{
	    			echo "exits";
	    		}
	    	}
		}
    }

 	//发送邮件 -- 适合于非SAE
    function sendEmail($email,$subject,$message,$type){
  		//加载CI的email类  
  		$this->load->library('email'); 
	    //以下设置Email参数  
		$config['protocol'] = 'smtp';  
		$config['smtp_host'] = 'smtp.163.com';  
		$config['smtp_user'] = 'website3d';  
		$config['smtp_pass'] = 'amywebsite';  
		$config['smtp_port'] = '25';  
		$config['charset'] = 'utf-8';  
		$config['wordwrap'] = TRUE;  
		$config['mailtype'] = 'html';  
		$this->email->initialize($config);  
		         
	    //以下设置Email内容  
		$this->email->from('website3d@163.com', '合一书店');  
		$this->email->to($email);  
		$this->email->subject($subject);  
		$this->email->message($message);  
	    //$this->email->attach('public/images/bg/background.jpg');//相对于index.php的路径  
		$this->email->send();  
		//echo $this->email->print_debugger();        //返回包含邮件内容的字符串，包括EMAIL头和EMAIL正文。用于调试。
		
		if($type == "active"){
			echo "<script>alert('Active link has been send to your UIC email!');window.location='http://mis.uic.edu.hk/';</script>";
			//redirect('http://webmail.uic.edu.hk/extmail/cgi/index.cgi');
		}elseif ($type == "forgepass") {
			echo "<script>alert('Reset password link has been send to your UIC email!');window.location='http://mis.uic.edu.hk/';</script>";
		}
  	}

	//登出
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(),'reload');
	}

	//注册后激活用户
	function activeUser($id_num,$token){
		$this->load->model('User_model');
	    $result = $this->User_model->getUserById($id_num);
	    if(empty($result)){
	    	echo "<script>alert('The user does not exist ! Register again.');</script>";
			//redirect(base_url(),'reload');
	    }else{
	    	$name = $result->name;
	    	$email = $result->email;
	    	$division = $result->division;
	    	$tel = $result->tel;
	    	$str = $name.$email.$division.$tel;
	    	$id = $result->id; 
			$_str = $this->encode_text($token,"heyi_books","decode",3600);
			if($str == $_str){
				$this->updateUserStatus($id_num);
			}else{
	    		$this->deleteUserNotActiveBySid($id_num);
	    		echo "<script>alert('The activation time is over! Register again.');</script>";
			}
	    }
	    //redirect(base_url(),'reload');
	}

	function updateUserStatus($id){
		$this->load->model('User_model');
	    return $this->User_model->updateUserStatus($id);
	}

	function deleteUserNotActiveBySid($id){
		$this->load->model('User_model');
		$status = $this->User_model->getUserStatus($id);
		if($status->status == "0"){
			$this->User_model->deleteUserById($id);
		}
	}

	function forget(){
		$this->load->view('forgetpass');
	}

	function forgetpass(){
		if(!empty($_POST)){
			$this->load->model('User_model');
			$result = $this->User_model->getUserByEmailName();
			if(!empty($result)){
				$name = $result->name;
		    	$email = $result->email;
		    	$division = $result->division;
		    	$tel = $result->tel;
		    	$str = $name.$email.$division.$tel."forget";
		    	$id_num = $result->id; 
				$token = $this->encode_text($str,"heyi_books","encode",3600);
				$link=base_url()."auth/resetpass/".$id_num."/".$token; 
				$subject = "找回密码 -- 合一书店!";
				$message = "<h3>Welcome ".$name.",</h3><h4>   <br> Please click below link to reset your password:<br><a  target='_blank' href='".$link."'>".$link."</a><br> @合一书店!";
		    	$type = "forgepass";
	            //$this->sendEmail($email,$subject,$message,$type); 
	            $this->sendEmail("77413446@qq.com",$subject,$message,$type); 


			}else{
				echo "<script>alert('Your information does not match!');window.location='".base_url('auth/forget')."';</script>";
			}
			//var_dump(empty($result));
			//var_dump($result);



		}else{
			redirect(base_url('auth/forget'));
		}
		//$this->load->view('forgetpass');
	}

	function resetpass($id_num,$token){
		$this->load->model('User_model');
	    $result = $this->User_model->getUserById($id_num);
	    if(empty($result)){
	    	echo "<script>alert('The user does not exist ! Register again.');</script>";
			redirect(base_url(),'reload');
	    }else{
	    	$name = $result->name;
	    	$email = $result->email;
	    	$division = $result->division;
	    	$tel = $result->tel;
	    	$str = $name.$email.$division.$tel."forget";
	    	$id = $result->id; 
	    	$data['uid'] = $id;
			$_str = $this->encode_text($token,"heyi_books","decode",3600);
			if($str == $_str){
				$this->load->view('resetpass',$data);
			}else{
	    		echo "<script>alert('The resetpass time is over!');</script>";
	    		redirect(base_url('auth/forget'),'reload');
			}
	    }
	}

	function updatepass(){
		$this->load->model('User_model');
	    $result = $this->User_model->updateUserPassword();
	    if($result){
			echo "<script>alert('Update your password successfully!');window.location='".base_url('auth/signin')."';</script>";
	    }else{
			echo "<script>alert('Update your password failed!');window.location='".base_url('auth/forget')."';</script>";
	    }
	}

	  	//加密字符串
	private function encode_text($tex,$key,$type="encode",$expiry=0){
    	$chrArr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
                  'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                  '0','1','2','3','4','5','6','7','8','9');
    	if($type=="decode"){
        	if(strlen($tex)<14)return false;
       	 	$verity_str=substr($tex, 0,8);
        	$tex=substr($tex, 8);
        	if($verity_str!=substr(md5($tex),0,8)){
            	return false;
        	}    
    	}
    	$key_b=$type=="decode"?substr($tex,0,6):$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62].$chrArr[rand()%62];
    	$rand_key=$key_b.$key;    
    	$modnum=0;$modCount=0;$modCountStr="";
    	if($expiry>0){
        	if($type=="decode"){
            	$modCountStr=substr($tex,6,1);
            	$modCount=$modCountStr=="a"?10:floor($modCountStr);
            	$modnum=substr($tex,7,$modCount);
            	$rand_key=$rand_key.(floor((time()-$modnum)/$expiry));
        	}else{
            	$modnum=time()%$expiry;
            	$modCount=strlen($modnum);
            	$modCountStr=$modCount==10?"a":$modCount;
            	$rand_key=$rand_key.(floor(time()/$expiry));            
        	}
        	$tex=$type=="decode"?base64_decode(substr($tex, (7+$modCount))):"nihao".$tex;
    	}else{
        	$tex=$type=="decode"?base64_decode(substr($tex, 6)):"nihao".$tex;
    	}
    	$rand_key=md5($rand_key);
    	$texlen=strlen($tex);
    	$reslutstr="";
    	for($i=0;$i<$texlen;$i++){
        	$reslutstr.=$tex{$i}^$rand_key{$i%32};
    	}
    	if($type!="decode"){
        	$reslutstr=trim(base64_encode($reslutstr),"==");
        	$reslutstr=$modCount?$modCountStr.$modnum.$reslutstr:$reslutstr;
        	$reslutstr=$key_b.$reslutstr;
        	$reslutstr=substr(md5($reslutstr), 0,8).$reslutstr;
    	}else{
        	if(substr($reslutstr,0, 5)!="nihao"){
            	return false;
        	}
        	$reslutstr=substr($reslutstr, 5);
    	}
    	return $reslutstr;
	}


}