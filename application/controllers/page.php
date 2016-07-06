<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
    $this->load->model("free_model");
    $data['user'] = $this->session->userdata('user');
    if(empty($data['user']) ){

      if($this->input->post('enter')){
$login = htmlspecialchars($this->input->post('login'));

$pass = htmlspecialchars($this->input->post('pass'));
$pass = md5($pass);
$check = $this->free_model->login($login,$pass);

if($check == TRUE){

$ses_data = array('user' => $login);
$this->session->set_userdata($ses_data);

redirect(base_url().'page');
}

}

$this->load->view('admin/au_user', $data);
}else{

    if($this->input->post('add_ob')){

        date_default_timezone_set('Asia/Yekaterinburg');


    $date = date("Y-m-d");
        $title          = $this->input->post('title');
        $adres          = $this->input->post('adres'); 
        $cena           = $this->input->post('cena'); 
        $col_room       = $this->input->post('col_room'); 
        $plos           = $this->input->post('plos'); 
        $zilaya         = $this->input->post('zilaya'); 
        $kuhnya         = $this->input->post('kuhnya'); 
        $okna           = $this->input->post('okna'); 
        $su             = $this->input->post('su'); 
        $plos_su        = $this->input->post('plos_su'); 
        $balkon         = $this->input->post('balkon'); 
        $plos_balkon    = $this->input->post('plos_balkon'); 
        $garderob       = $this->input->post('garderob'); 
        $plos_garderob  = $this->input->post('plos_garderob'); 
        $etaz           = $this->input->post('etaz'); 
        $etaznost       = $this->input->post('etaznost'); 
        $type_home      = $this->input->post('type_home'); 
        $mebel          = $this->input->post('mebel'); 
        $parking        = $this->input->post('parking'); 
        $ipoteka        = $this->input->post('ipoteka'); 
        $type           = $this->input->post('type'); 
        $agent          = $this->input->post('agent'); 
        $text           = $this->input->post('text'); 
        $sale           = $this->input->post('sale'); 
        $vid            = $this->input->post('vid'); 
        $postr          = $this->input->post('postr'); 
        $comunic        = $this->input->post('comunic'); 
        
$data = array(
            
'date'         =>   $date, 
'title'        =>   $title,
'adres'        =>   $adres,
'cena'         =>   $cena,
'col_room'     =>   $col_room,
'plos'         =>   $plos,
'zilaya'       =>   $zilaya,
'kuhnya'       =>   $kuhnya,
'okna'         =>   $okna,
'su'           =>   $su,
'plos_su'      =>   $plos_su,
'balkon'       =>   $balkon,
'plos_balkon'  =>   $plos_balkon,
'garderob'     =>   $garderob,
'plos_garderob'=>   $plos_garderob,
'etaz'         =>   $etaz,
'etaznost'     =>   $etaznost,
'type_home'    =>   $type_home,
'mebel'        =>   $mebel,
'parking'      =>   $parking,
'ipoteka'      =>   $ipoteka,
'type'         =>   $type,
'agent'        =>   $agent,
'text'         =>   $text,
'sale'         =>   $sale,
'vid'          =>   $vid,
'postr'        =>   $postr,
'comunic'      =>   $comunic,
            );
         $this->load->model("free_model");
        $data['id_ob'] = $this->free_model->add_ob($data);
$this->load->view('admin/top',$data);
$this->load->view('admin/load_photo',$data);
$this->load->view('admin/bottom',$data);
}
else {

    if ($this->input->post('load_files'))
        {
            $parent = $this->input->post('parent');
            $config['upload_path'] = './images/ob/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '15360';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $temp_files = $_FILES;
            $count = count ($_FILES['file']['name']);
            for ($i=0; $i<=$count-1; $i++)
                {
                    $_FILES['file'] = array (
                    'name'=>$temp_files['file']['name'][$i],
                    'type'=>$temp_files['file']['type'][$i],
                    'tmp_name'=>$temp_files['file']['tmp_name'][$i],
                    'error'=>$temp_files['file']['error'][$i],
                    'size'=>$temp_files['file']['size'][$i]);
                    $this->upload->do_upload('file');
                    $tmp_data = $this->upload->data();
                    $files_data[$i]['data'] = $tmp_data['file_name'];
                    $img = array(
                        'img'         =>   $files_data[$i]['data'], 
                        'parent'        =>   $parent,
                        );
                    $this->db->insert('gallery',$img);
            }
            echo "<h3>Файлы загружены. Объявление добавлено!</h3><a href='".base_url()."first/fr/".$parent."'>Просмотреть объявление</a>";
        } else {

    $a = $this->db->get('type');
    $data['type'] = $a->result_array();
    $b = $this->db->get('parametr');
    $data['par'] = $b->result_array();
    $c = $this->db->get('agent');
    $data['agent'] = $c->result_array();
    $this->load->view('admin/top');
    $this->load->view('admin/room', $data);
    $this->load->view('admin/bottom');
    }
}

       


       

    }
}

public function editor() {

    $a = $this->db->get('newhome');
    $data['ob'] = $a->result_array();
        $this->load->view('admin/top');
    $this->load->view('admin/editor', $data);
    $this->load->view('admin/bottom');

}

public function edit_ob($id) {

if ($this->input->post('add_photo')) {

            $config['upload_path'] = './images/ob/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '15360';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $temp_files = $_FILES;
            $count = count ($_FILES['file']['name']);
            for ($i=0; $i<=$count-1; $i++)
                {
                    $_FILES['file'] = array (
                    'name'=>$temp_files['file']['name'][$i],
                    'type'=>$temp_files['file']['type'][$i],
                    'tmp_name'=>$temp_files['file']['tmp_name'][$i],
                    'error'=>$temp_files['file']['error'][$i],
                    'size'=>$temp_files['file']['size'][$i]);
                    $this->upload->do_upload('file');
                    $tmp_data = $this->upload->data();
                    $files_data[$i]['data'] = $tmp_data['file_name'];
                    $img = array(
                        'img'         =>   $files_data[$i]['data'], 
                        'parent'        =>   $id,
                        );
                    $this->db->insert('gallery',$img);
            }
            echo "<h3>Файлы загружены.</h3><a href='".base_url()."first/fr/".$id."'>Просмотреть объявление</a>";
}

    $this->db->where('parent', $id);
    $a = $this->db->get('gallery');
    $data['img'] = $a->result_array();
    $this->load->view('admin/top');
    $this->load->view('admin/edit_img',$data);
    $this->load->view('admin/bottom');

}
public function del_img() {
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $this->db->delete('gallery');
}

public function add_new() {
    if ($this->input->post('add_news')) {
         $date_news = $this->input->post('news_date');
         $title_news = $this->input->post('news_title');
         $text_news = $this->input->post('news_text');
            $config['upload_path'] = './images/news/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '15360';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $temp_files = $_FILES;
            $count = count ($_FILES['file']['name']);
            for ($i=0; $i<=$count-1; $i++)
                {
                    $_FILES['file'] = array (
                    'name'=>$temp_files['file']['name'][$i],
                    'type'=>$temp_files['file']['type'][$i],
                    'tmp_name'=>$temp_files['file']['tmp_name'][$i],
                    'error'=>$temp_files['file']['error'][$i],
                    'size'=>$temp_files['file']['size'][$i]);
                    $this->upload->do_upload('file');
                    $tmp_data = $this->upload->data();
                    $files_data[$i]['data'] = $tmp_data['file_name'];
                    $img = array(
                        'img'         =>   $files_data[$i]['data'], 
                        'date'        =>   $date_news,
                        'title'        =>   $title_news,
                        'text'        =>   $text_news,
                        );
                    $this->db->insert('news',$img);
            }
        $data['status_news'] = 'Новость добавлена';
          $this->load->view('admin/top');
    $this->load->view('admin/add_news',$data);
    $this->load->view('admin/bottom'); 
    } else {
        $data['status_news'] = '';
    $this->load->view('admin/top');
    $this->load->view('admin/add_news',$data);
    $this->load->view('admin/bottom');  
    }
}

	
}