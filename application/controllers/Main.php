<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('user_model'));
		$this->load->helper('util_helper');
		$this->load->library('form_validation');
		
	}
	

	function index(){
		
		
		if($this->session->userdata('logged_in')){
			
			//configura menu
			$data['menu']=array("Treino"=>"main/#", "Assessoria"=>"main/#", "Usuários"=>"main/usuario", "Sair"=>"home/logout", "?"=>"main/#");
			
			//Main page 
			$this->load->view('header', $data);
			$this->load->view('main');
			$this->load->view('footer');
			
			
		} else {
			//If no session, redirect to login page
			redirect('home', 'refresh');
		}
	}
	
	
	function cadastro(){
	
	
		$this->form_validation->set_rules('assessoria', 'Assessoria', 'trim|required',
				array('required' => 'Campo necessário')
		);
		$this->form_validation->set_rules('cnpjcpf', 'Cnpjcpf', 'trim|required',
				array('required' => 'Campo necessário')
		);
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required',
				array('required' => 'Campo necessário')
		);
		
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|matches[resenha]',
				array('required' => 'Campo necessário',
						'matches' => 'Senhas não são iguais')
		);
		
		$this->form_validation->set_rules('resenha', 'Resenha', 'trim|required',
				array('required' => 'Campo necessário')
		);
	
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|matches[remail]',
				array('required' => 'Campo necessário',
						'valid_email' => 'Por favor use um email válido',
						'matches' => 'Emails não são iguais')
		);
		
		$this->form_validation->set_rules('remail', 'Remail', 'trim|required|valid_email',
				array('required' => 'Campo necessário',
						'valid_email' => 'Por favor use um email válido')
		);
		
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required',
				array('required' => 'Campo necessário')
		);
	
		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  Preparing menu itens
			$data['menu']=array("Treino"=>"#", "Assessoria"=>"#", "Usuários"=>"main/usuario", "Sair"=>"home/logout", "?"=>"#");
			
			//User redirected to login page
			$this->load->view('header', $data);
			$this->load->view('cadastro');
			$this->load->view('footer');
			
		} else {
	        
	        
			//add to database
			
			$data= $this->input->post();
			$result = $this->user_model->addUser($data);
			if ($result){
				//go back to login page
		     	redirect('main', 'refresh');
			}
	    }
	
	}
	
    
	function usuario(){
		
		if($this->session->userdata('logged_in')){
		
			$session_data = $this->session->userdata('logged_in');
			
			$this->load->library('pagination');
			
			$config['base_url'] = site_url() . "/main/usuario/";
			$config['total_rows'] = $this->user_model->record_count($session_data['tipo_usuario']);
			$config['per_page'] = 8;
			
			//config for bootstrap pagination class integration
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			
			
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page'] = $page;
			
			$data["results"] = $this->user_model->fetch_record($session_data['tipo_usuario'],$config["per_page"], $page);
			
			$data['username'] = $session_data['username'];
			
			//configura menu
			$data['menu']=array("Treino"=>"main/usuario/#", "Assessoria"=>"main/usuario/#", "Usuários"=>"main/usuario", "Sair"=>"home/logout", "?"=>"main/usuario/#");
			//$data['lista'] = $this->user_model->listUser($session_data['tipo_usuario']);
			
			$this->load->view('header', $data);
			$this->load->view('usuario');
			$this->load->view('footer');

			
		} else {
			//If no session, redirect to login page
			redirect('main', 'refresh');
		}
		
	}
	
	
	function invite(){
	
		$email= $this->uri->segment(3)."@".$this->uri->segment(4);
		$this->user_model->sendInvite($email);
	
	}
	
}