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
 
 
 function listUser($id){
 
 	//print_r($id); die();
 	//lista usuário
 	$this->db->select ('usuario.id_usuario as idusuario, usuario.*, dados_usuario.*, assessoria.*, tipo_usuario.*');
 	$this->db->from('usuario');
 	$this->db->join('tipo_usuario', 'usuario.id_tipo_usuario = tipo_usuario.id_tipo_usuario');
 	$this->db->join('dados_usuario', 'usuario.id_usuario = dados_usuario.id_usuario', 'left');
 	$this->db->join('assessoria', 'usuario.id_assessoria = assessoria.id_assessoria', 'left');
 	
 	// se não for runbbit admim listar somente os da assessoria
 	if ($id!=4){
 		//seleciona a assessoria do usuário
 		$id_assessoria = 0;
 		// apenas assessoria escolhida
 		$this->db->where("usuario.id_assessoria",$id_assessoria);
 	}
 	
 	$query = $this->db->get();
 	//print_r( $query);
 	
 	if($query->num_rows()>0) {
 	
 		//return $query->result_array();
 		return $query;
 		
 	} else {
 	
 		return false;
 	}
 		
 }
 
 
 function fetch_record($id, $limit, $start)
 {
 	$this->db->limit($limit, $start);
 	$query = $this->listUser($id);
 	//$query = $this->db->get('usuario');
 	return ($query->num_rows() > 0)  ? $query->result() : FALSE;
 
 }
 
 function record_count($id)
 {
 //lista usuário
 	$this->db->select ('usuario.id_usuario as idusuario, usuario.*, dados_usuario.*, assessoria.*, tipo_usuario.*');
 	$this->db->from('usuario');
 	$this->db->join('tipo_usuario', 'usuario.id_tipo_usuario = tipo_usuario.id_tipo_usuario');
 	$this->db->join('dados_usuario', 'usuario.id_usuario = dados_usuario.id_usuario', 'left');
 	$this->db->join('assessoria', 'usuario.id_assessoria = assessoria.id_assessoria', 'left');
 	
 	// se não for runbbit admim listar somente os da assessoria
 	if ($id!=4){
 		//seleciona a assessoria do usuário
 		$id_assessoria = 0;
 		// apenas assessoria escolhida
 		$this->db->where("usuario.id_assessoria",$id_assessoria);
 	}
 	
 	return $this->db->count_all_results();
 	//return $this->db->count_all('usuario');
 }
 
 function getUserType($id){
 	
 	$query = $this->db->get_where('tb_produto', array('isbn_produto' => $id));
 	
 	if($query->num_rows()>0){
 	
 		$res= $query->result();
 		return $res[0]->titulo_produto;
 	
 	}
 	 
 	return "";
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