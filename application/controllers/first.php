<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

  function __construct() {
        parent::__construct();
        $this->load->model('post');
        $this->load->library('Ajax_pagination');
        $this->perPage = 10;
    }
    
  public function index() {

      //total rows count
        $totalRec = count($this->post->getRows());
        
        //pagination configuration
        $config['first_link']  = 'Начало';
        $config['div']         = 'postList'; //parent div tag id
        $config['base_url']    = base_url().'first/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['posts'] = $this->post->getRows(array('limit'=>$this->perPage));


  		$this->db->where('type','nav');
  		$a = $this->db->get('menu');
  		$data['nav'] = $a->result_array();
  		$b = $this->db->get('type');
  		$data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      //$this->db->order_by('date','DESC');
      //$f = $this->db->get('newhome');
     // $data['first'] = $f->result_array();
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
		$this->load->view("top",$data);
		$this->load->view("first_view",$data);
		$this->load->view("bottom",$data);
  }

  public function pages($page) {

    $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('link',$page);
      $d = $this->db->get('pages');
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['page'] = $d->row_array();
        $this->load->view("top",$data);
        if ($page != 'partners') {
          if($page=='news') {
            $this->db->order_by('date',"DESC");
            $n = $this->db->get('news');
            $data['news'] = $n->result_array();
            $this->load->view("news",$data);
          } else {
            $this->load->view("page",$data);}
        } else {
          $this->load->view($page,$data);
        }
        $this->load->view("bottom",$data);
      }
      
  }
  
    public function uslugi($page) {
    $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('id',$page);
      $d = $this->db->get('uslugi');
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['page'] = $d->row_array();
        $this->load->view("top",$data);
        $this->load->view("uslugi",$data);
        $this->load->view("bottom",$data);
      }
      
  }

   public function submenu() {
    $id = $this->input->post('id');
    $this->db->where('parent',$id);
    $this->db->where('visible',1);
    $a = $this->db->get('menu');
    if($a->num_rows() != 0) {
      $menu2 = $a->result();
      echo "<ul class='sub-docs'>";
      foreach ($menu2 as $item2) {
        echo "<li><a class='link-submenu' href=".base_url().'first/room/'.$item2->link.">".$item2->title."</a></li>";
      }; 
      echo '</ul>';
    }
  }
  
   public function s_room($id) {
    $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('id',$id);
      $d = $this->db->get('second_room');
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['room'] = $d->row_array();
        $this->load->view("top",$data);
        $this->load->view("room",$data);
        $this->load->view("bottom",$data);
      }
      
  }

  public function zu($id) {
    $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('id',$id);
      $d = $this->db->get('zu');
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['room'] = $d->row_array();
        $this->load->view("top",$data);
        $this->load->view("room_zu",$data);
        $this->load->view("bottom",$data);
      }
      
  }

  public function fr($id) {
    $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('id',$id);
      $d = $this->db->get('newhome');
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['room'] = $d->row_array();
        $this->load->view("top",$data);
        $this->load->view("room_first",$data);
        $this->load->view("bottom",$data);
      }
      
  }

  public function room($tb) {

      $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->where('type',$tb);
      $d = $this->db->get('newhome');

      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      if ($d->num_rows() == 0) {
        $this->load->view("top",$data);
        $this->load->view("nopage",$data);
        $this->load->view("bottom",$data);
      } else {
        $data['rom'] = $d->result_array();
        $this->load->view("top",$data);
        $this->load->view('newhome',$data);
        $this->load->view("bottom",$data);
      }

  }

    public function search($sale,$vid,$t) {
      $this->db->where('type','nav');
      $a = $this->db->get('menu');
      $data['nav'] = $a->result_array();
      $b = $this->db->get('type');
      $data['l_menu'] = $b->result_array();
      $c = $this->db->get('slogan');
      $data['slogan'] = $c->result_array();
      $this->db->order_by('date','DESC');
      $f = $this->db->get('newhome');
      $data['first'] = $f->result_array();
      $g = $this->db->get('slide');
      $data['slide'] = $g->result_array();
      $this->db->where('sale',$sale);
      $this->db->where('vid',$vid);
      $this->db->where('type',$t);
      $s = $this->db->get('newhome');
      $data['search'] = $s->result_array();
    $this->load->view("top",$data);
    $this->load->view("rs_view",$data);
    $this->load->view("bottom",$data);
  }

  function ajaxPaginationData()
    {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->post->getRows());
        
        //pagination configuration
        $config['first_link']  = 'Начало';
        $config['div']         = 'postList'; //parent div tag id
        $config['base_url']    = base_url().'first/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['posts'] = $this->post->getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        //load the view
        $this->load->view('posts/ajax-pagination-data', $data, false);
    }

    public function gallery() {
      $this->load->view('gallery');
    }

}

