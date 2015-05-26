<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('user_model'));
		$this->load->helper('util_helper');
		
	}
	

	function index(){
		
		
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email',
	   		 array('required' => 'Campo necessário',
	   		 		'valid_email' => 'Por favor use um email válido')   		 		
	   		 );
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database',
	   		 array('required' => 'Campo necessário')   		 		
	   		 );
	
	   if($this->form_validation->run() == FALSE)
	   {
	     
	   	 //Field validation failed.  Preparing menu itens
	   	 $data['menu']=array("Participe"=>"main/cadastro", "Entrar"=>"main", "?"=>"#");
	     
	     //User redirected to login page
	   	 $this->load->view('header',$data);
	     $this->load->view('login');
	     $this->load->view('footer');
	   }
	   else
	   {
	     //Go to private area
	     redirect('main/home', 'refresh');
	   }
	   
	}
	
	
	function cadastro(){
	
		
		$this->load->library('form_validation');
	
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
			$data['menu']=array("Participe"=>"main/cadastro", "Entrar"=>"main", "?"=>"#");
			
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
	
	
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
	
		//query the database
		$result = $this->user_model->login($username, $password);
	
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
						'id' => $row->id_usuario,
						'username' => $row->desc_usuario
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Nome de email ou senha inválidos');
			return false;
		}
	}
	
	
	function logout(){
		$this->session->unset_userdata('logged_in');
		@session_destroy();
		redirect('main', 'refresh');
	}
	
		
	
	function edit_field_callback_1($value, $primary_key){
		return '<input type="password" maxlength="50" value="" name="pw_user">';
	}
        
    function encrypt_password_callback($post_array, $primary_key = null){
        $post_array['passwd_usuario'] = sha1($post_array['passwd_usuario']);
        return $post_array;
    }
    
	function home(){
		
		if($this->session->userdata('logged_in')){
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			

			$this->load->view('home');	
			
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