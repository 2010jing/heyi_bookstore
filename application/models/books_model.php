<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function search(){
        $keyword=$_GET['keyword'];
		$this->db->like('booktitle', $keyword); 
        $query = $this->db->get('heyi_books');  
        return $query->result();
    }

    function bookDetail($bid){
        $this->db->where('id', $bid); 
        $query = $this->db->get('heyi_books');  
        return $query->first_row();
    }

    function homepageBooks(){
        $this->db->order_by("id", "asc");
        $this->db->limit(20);
        $query = $this->db->get('heyi_books');  
        return $query->result();

    }

    function majorSearch(){
        if(count($_POST)<1){
            $major = ''; 
            $grade = ''; 
            $semester = '';
        }else{
            $major = $_POST['major']; 
            $grade = $_POST['grade']; 
            $semester = $_POST['semester'];
        }
       
        $this->db->where('major', $major); 
        $this->db->where('grade', $grade); 
        $this->db->where('semester', $semester); 
        $query = $this->db->get('heyi_books');  
        return $query->result();

    }

    //测试
    function tt(){
        $this->db->set('grade',1);
        $this->db->update('heyi_books');
    }

}    