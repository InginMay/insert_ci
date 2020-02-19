<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//show home  page
	public function index()
	{
		$data['inner_page'] = 'home';
		$this->load->view('template',$data);
	}
	//show about  page
	public function about()
	{
		$data['inner_page'] = 'about';
		$this->load->view('template',$data);
	}
	//show contact  page
	public function contact()
	{
		$data['inner_page'] = 'contact';
		$this->load->view('template',$data);
	}
	//show post  page
	public function post()
	{
		$data['todos']=$this->db->get('todos')->result();

		$data1 = array('id' => '4',
        'description' => 'Not Bad',
        'completed' => '0');
        $this->db->insert('todos', $data1);

		$data['inner_page'] = 'post';
		$this->load->view('template',$data);
	}

	// public function insert()
	// {
		
	// }

	// public function delete()
	// {
	// 	$this->load->
	// }
}
