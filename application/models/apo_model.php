<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apo_model extends CI_Model {

	function get_main_menu() {
		$this->db->where('visible',1);
   		$this->db->where('parent',0);
    	$this->db->order_by('position','ASC');
    	$a = $this->db->get('menu');
    	return $a->result_array();
	}

	function get_submenu() {
		$this->db->where('parent <>',0);
    	$this->db->where('visible',1);
   		$b = $this->db->get('menu');
    	return $b->result_array();
	}

	function get_doc_page($id) {
		$this->db->where('parent',$id);
        $this->db->order_by('date','DESC');
		$a = $this->db->get('docs');
		return $a->result_array();
	}

	function get_parent($id) {
		$this->db->where('id',$id);
		$q = $this->db->get('menu');
		$q = $q->row_array();
		$this->db->where('parent',$q['parent']);
    	$this->db->where('visible',1);
    	$this->db->order_by('position');
    $a = $this->db->get('menu');
    if($a->num_rows() != 0) {
      $menu2 = $a->result();
      $t = "<ul class='sub-docs'>";
      foreach ($menu2 as $item2) {
        $t= $t."<li><a class='link-submenu' href=".base_url().'first/room/'.$item2->id.">".$item2->title."</a></li>";
      }; 
      return $t.'</ul>';
    }
	}
	function get_id_parent($id) {
		$this->db->where('id',$id);
		$q = $this->db->get('menu');
		$q = $q->row_array();
		return $q['parent'];
	}
}