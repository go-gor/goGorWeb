		<div class="row-fluid">	
			<div class="col-xs-12 col-lg-12">
			
				<h4 style="text-align: right;"><a href="javascript:;" onclick="janelaEditarCliente()">Novo usuário</a></h4>
				<br />
				<div class="jumbotron runbbit_bg" id="Area-cadastro">
			  		<table class="table table-hover table-bordered">
			  		<thead>
					<tr style="background-color: #337ab7;">
						<td class="text-center"><strong>ID</strong></td>
			        	<td><strong>nome</strong></td>
			        	<td><strong>Email</strong></td>
			        	<td><strong>Tipo</strong></td>
			        	<td><strong>Assessoria</strong></td>
			        	<td><strong>Data</strong></td>
			        	<td><strong>Ações</strong></td>
			        </tr>
			        </thead>
			        <tbody>
					<?php 
						foreach ($results as $key => $value){
					?>
			        <tr>
			        	<td><?php echo $value->idusuario;?></td>
			        	<td><?php echo $value->desc_usuario;?></td>
			        	<td><?php echo $value->email_usuario;?></td>
			        	<td><?php echo $value->desc_tipo_usuario;?></td>
			        	<td><?php echo $value->desc_assessoria;?></td>
			        	<td><?php echo $value->dt_insert_usuario;?></td>
			        	<td><span class='glyphicon glyphicon-wrench'></span>&nbsp;
			        	<span class='glyphicon glyphicon-trash'></span></td>
			        </tr>
					<?php } ?>
					</tbody>
					</table>
					
				
					<div class="text-center">
						<?php 
						//echo $pagination_links; 
						echo $this->pagination->create_links();
						?>
					</div>
				</div>
			</div>
		</div>	

	<script>	
	    	function janelaEditarCliente(id_cliente){
    		
    		//antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal
    		//carregaDadosClienteJSon(id_cliente);
    		
	    	$('#modalEditarCliente').modal('show');
    	}
    	
    </script>	
		
	<div class="modal fade bs-example-modal-lg" id="modalEditarCliente" >
	  <div class="modal-dialog">
	    <div class="modal-content runbbit_bg">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        <h4 class="modal-title">Novo Usuário</h4>
	      </div>
	      <div class="modal-body">
	      	
					<?php 
						$attrib = array('id' => 'cadastro', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('main/cadastro',$attrib); 
					?>
					<div class="form-group">
		
						<div class="col-sm-12" style="margin-top: 30px">
							<input type="text" class="runbbit_form-control" id="Assessoria" placeholder="Nome da assessoria" name="assessoria" maxlength="200">
						</div>

						<div class="col-sm-12" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Cnpjcpf" placeholder="CNPJ ou CPF" name="cnpjcpf" maxlength="200">
						</div>
	
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Nome" placeholder="Nome do responsável" name="nome" maxlength="200">
						</div>
	
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="Senha" placeholder="Senha" name="senha" maxlength="30">
						</div>
						
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="Resenha" placeholder="Repetir senha" name="resenha" maxlength="30">
						</div>
	
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="email" class="runbbit_form-control" id="Email" placeholder="Email" name="email" maxlength="200">
						</div>
	
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="email" class="runbbit_form-control" id="Remail" placeholder="Confirme email" name="remail" maxlength="200">
						</div>
	
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Telefone" placeholder="Telefone" name="telefone" maxlength="200">
						</div>

						
					 </div> 
					</form>	    
			    
	      </div>
	      <div class="modal-footer">

	      				<div class="pull-right" style="margin-top: 20px">
						<a href="#" onclick="document.getElementById('cadastro').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
						</div>
	      
	       <!--   <button type="button" class="btn btn-primary" onclick="$('#formulario_clientes').submit()">Salvar Alterações</button> -->
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  
		
		
		