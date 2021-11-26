<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->model('all_model');
			$this->load->model("user_model");
			if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}
	
	public function index() {
			$data = array();
			$this->template->set('title', 'Home');
			$this->template->load('default_layout', 'contents' , 'content/index', $data);
	}



	 public function get_data() {
		 $data = $this->all_model->get_by_result('user', array());
	   foreach ($data as $key => $value) {
	     $value->no        = $key +1;
			 $value->aksi 		 = '<a href="javascript:void(0);" onclick="edit_data('.$value->user_id.')" class="btn btn-default btn-sm">Edit</a>
			 <a href="javascript:void(0);" onclick="delete_kategori('.$value->user_id.')" class="btn btn-danger btn-sm">Delete</a>';
	   }
		 $total = count($this->all_model->get_by_result('user',array()));

	   $_data['recordsTotal']     = $total;
	   $_data['recordsFiltered']  = $total;
	   $_data['data']             = $data;
	   print_r(json_encode($_data));
	 }
}
