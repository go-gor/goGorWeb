<?php
Class User_model extends CI_Model
{
 function login($username, $password){
   $this->db->where("email_usuario",$username);
   $this->db->where("passwd_usuario", sha1($password));
   $this->db->limit(1);

   $query = $this -> db -> get('usuario');

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 function addUser($data){
 	
 	//add usuário
 	$this->db->insert('usuario', array('desc_usuario' => $data['nome'],
 			'passwd_usuario' => sha1($data['senha']),
 			'id_tipo_usuario' => '1',
 			'email_usuario' => $data['email']));
 	
 	return true;
 	 
 }
 
 function sendInvite($email){
 	
 	$this->load->library('email');
 	
 	$config['charset'] = 'iso-8859-1';
 	$config['wordwrap'] = TRUE;
 	$config['mailtype'] = 'html';
 	
 	$this->email->initialize($config);
 	
 	
 	$this->email->from('contato@runbbit.tk', 'runbbit');
 	$this->email->to($email);
 	
 	
 	$this->email->subject('Participe do Runbbit');
 	$this->email->message('
 			<center>
 			<h1>Participe do Runbbit</h1>
 			<br />
 			<img src='.base_url("assets/img/runbbit_logo.png").' />
 			</center>
 			<p>
 				Olá usuário.
 			</p>
 			<p>
 				Você foi convidado para participar do Runbbit. Um sistema inovador de treino para corridas criado para
 			melhorar a relação entre assessorias, treinadores  e seus corredores.
 			</p>
 			<p>
 				Acesse runbbit.tk 
 			</p>
 			
 			');
 	
 	$this->email->send();
 	
 }
 
 
 
}
?>