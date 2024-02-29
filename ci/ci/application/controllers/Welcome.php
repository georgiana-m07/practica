<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()	{
		//$this->load->view('welcome_message');
		$TITLE="Acasa";
		$CONTENT="Bun venit!";
		$users=$this->db->get("users")->result();
		
		foreach ($users as $u){
			$u->countuser="User ".$u->id_user;
		}
		$CONTENT=$this->parser->parse("tabel.php", array("USERS"=>$users), true);
	
		$this->parser->parse('base_template.php', array("TITLE"=>$TITLE,
														"CONTENT"=>$CONTENT), false);
	}
	
	public function pag2() {
		$TITLE="Pag 2";
		$CONTENT=$this->parser->parse("formular.php", array("TITLE"=>$TITLE), true);
		$this->parser->parse('base_template.php', array("TITLE"=>$TITLE,
														"CONTENT"=>$CONTENT), false);
	}
	
	
	
	public function procesare_formular() {
		$TITLE="Procesare formular";
		
		
		$CONTENT="Bun venit, ".$this->input->post("user")."!";
		$this->parser->parse('base_template.php', array("TITLE"=>$TITLE,
														"CONTENT"=>$CONTENT), false);
	}
	
}
