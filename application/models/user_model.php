<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getUser(){
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('status', '1');
        $query = $this->db->get('heyi_user');  
        return $query->first_row();
    }

    function checkValidRegister(){
        $email=$_POST['email'];
        $this->db->where('email', $email);        
        $this->db->where('status !=', '1');
        $query = $this->db->get('heyi_user');  
        return $query->first_row();
    }

    function registerUser(){
        $this->id = null;
        $this->name=$_POST['name'];
        $this->email=$_POST['email'];
        $this->password=md5($_POST['password']);
        $this->studentid="123";
        $this->division=$_POST['division'];
        $this->tel=$_POST['tel'];
        if(strpos($_POST['email'],"@mail.uic.edu.hk")){
            $this->role='student';
        }elseif(strpos($_POST['email'],"@uic.edu.hk")){
            $this->role="teacher";
        }else{
            $this->role="user";
        }
        $regtime = date('YmdHis',time());
        $this->status="0";
        $this->regtime=$regtime;
        //return $this->db->insert('heyi_user', $this); //插入成功返回 true 否则 false
        $this->db->insert('heyi_user', $this);
        return $this->db->insert_id();
    }

    function getUserById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('heyi_user'); 
        return $query->first_row();
    }    

    function updateUserStatus($id){
        $this->db->set('status', '1');
        $this->db->where('id', $id);
        $this->db->update('heyi_user');
        return $this->db->affected_rows();
    }

    function getUserStatus($id){
        $this->db->select('status');
        $this->db->where('id', $id);
        $query = $this->db->get('heyi_user'); 
        return $query->first_row();

    }

    function deleteUserById($id){
      $this->db->where('id', $id);
      $this->db->delete('heyi_user');
    }
     

    //===================================







    function updateUserPassword($studentid){
        $password=md5($_POST['password']);
        $this->db->set('password', $password);
        $this->db->where('studentid', $studentid);
        $this->db->update('user');
        return $this->db->affected_rows();
    }



    function detectStudentId($studentid){
        $this->db->where('studentid', $studentid);
        $this->db->where('status', 1);

        $query = $this->db->get('user'); 
        return $query->num_rows();
    }




    function deleteUserNotActiveBySid($studentid){
      $this->db->where('studentid', $studentid);
      $this->db->delete('user');
    }

    
}