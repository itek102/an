<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Free_model extends CI_Model {

    function login($login,$pass) {

$this->db->where('login', $login);
$this->db->where('passwd', $pass);
$query = $this->db->get('users');
if($query->num_rows() > 0){
  return true;
}else {
  return false;
}
}

function add_ob($data) {
	$this->db->insert('newhome', $data);
	$this->db->order_by('id',"DESC");
	$this->db->limit(1);
	$a = $this->db->get('newhome');
	$a = $a->row_array();
	return $a['id'];
}

 
}