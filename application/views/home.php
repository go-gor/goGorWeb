<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="UTF-8">
	<!-- Latest compiled and minified JavaScript -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- material css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/roboto.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/material-fullpalette.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ripples.min.css'); ?>">
	
	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<script src="<?php echo base_url('assets/js/material.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ripples.min.js'); ?>"></script>
	
    <script>
      $.material.init();
    </script>
	
	<!-- Runbbit css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/runbbit.css'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Runbbit favicon -->
	<link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>" sizes="16x16">
	
	<title>GoGor - Runbbit</title>
</head>

<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-xs-10 col-lg-10 text-center"></div>
			<div class="col-xs-2 col-lg-2 text-center">
				<a href="javascript:;" onclick="janelaLogin()">
					<img src="<?php echo base_url('assets/img/botao_entrar.png'); ?>" class="img-responsive center-block" alt="Entrar no Runbbit" />
				</a>
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-xs-8 col-lg-8 text-center"></div>
			<div class="col-xs-4 col-lg-4 text-center">
				<br />
				<img src="<?php echo base_url('assets/img/logo_p.png'); ?>" class="img-responsive center-block" alt="" />	
				<H2>Runbbit</H2>
				
				Uma forma prática e eficaz<br />
				para treinadores e corredores<br />
				se comunicar, planejar treinar<br />
				<br />
				<a href="javascript:;" onclick="janelaAssessoria()">
					<img src="<?php echo base_url('assets/img/botao_assessoria.png'); ?>" class="img-responsive center-block" alt="inscrição assessoria" />
				</a>
				<a href="javascript:;" onclick="janelaCorredor()">
					<img src="<?php echo base_url('assets/img/botao_corredor.png'); ?>" class="img-responsive center-block" alt="inscrição corredor" />
				</a>
			</div>
        </div>
		<div class="row-fluid">
			<div class="col-xs-10 col-lg-10 text-center"></div>
			<div class="col-xs-2 col-lg-2 text-center">
				<a href="http://play.google.com">
					<img src="<?php echo base_url('assets/img/botao_google.png'); ?>" class="img-responsive center-block" alt="" />
				</a>
			</div>
		</div>    
	</div>
	
	
	<!--  Modal Login -->
	<script>	
	    	function janelaLogin(){		
	    	$('#modalLogin').modal('show');
    	}
    </script>	
		
	<div class="modal fade bs-example-modal-lg" id="modalLogin" >
	  <div class="modal-dialog">
	    <div class="modal-content runbbit_bg">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        <h4 class="modal-title">Login</h4>
	      </div>
	      <div class="modal-body">
	      	
					<?php 
						$attrib = array('id' => 'login', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home',$attrib); 
					?>
					<div class="form-group">
						<div class="col-sm-12" style="margin-top: 30px">
							<input type="email" class="runbbit_form-control" id="username" placeholder="Email" name="username" maxlength="200">
						</div>
						<div class="col-sm-12" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="password" placeholder="senha" name="password" maxlength="30">
						</div>
						<div class="col-sm-12" style="margin-top: 10px">
 							<label><input type="checkbox"> Lembrar meus dados neste computador</label>	
						</div>
					 </div> 
					</form>
			  	
				<?php echo validation_errors(); ?>
	      </div>
	      <div class="modal-footer">
		      <div class="pull-right" style="margin-top: 20px">
			  	<a href="#" onclick="document.getElementById('login').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
			  </div>
	       <!--   <button type="button" class="btn btn-primary" onclick="$('#formulario_clientes').submit()">Salvar Alterações</button> -->
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	
	
	
	<!--  Modal Corredor -->
	<script>	
	    	function janelaCorredor(){		
	    	$('#modalCorredor').modal('show');
    	}
    </script>	
		
	<div class="modal fade bs-example-modal-lg" id="modalCorredor" >
	  <div class="modal-dialog">
	    <div class="modal-content runbbit_bg">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        <h4 class="modal-title">Inscrição Corredor</h4>
	      </div>
	      <div class="modal-body">
	      	
					<?php 
						$attrib = array('id' => 'corredor', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home/cadastro',$attrib); 
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
			  	
				<?php echo validation_errors(); ?>
	      </div>
	      <div class="modal-footer">
		      <div class="pull-right" style="margin-top: 20px">
			  	<a href="#" onclick="document.getElementById('corredor').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
			  </div>
	       <!--   <button type="button" class="btn btn-primary" onclick="$('#formulario_clientes').submit()">Salvar Alterações</button> -->
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	
	
	
	<!--  Modal Assessoria -->
	<script>	
	    	function janelaAssessoria(){		
	    	$('#modalAssessoria').modal('show');
    	}
    </script>	
		
	<div class="modal fade bs-example-modal-lg" id="modalAssessoria" >
	  <div class="modal-dialog">
	    <div class="modal-content runbbit_bg">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        <h4 class="modal-title">Inscrição Assessoria</h4>
	      </div>
	      <div class="modal-body">
	      	
					<?php 
						$attrib = array('id' => 'assessoria', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home/cadastro',$attrib); 
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
			  	
				<?php echo validation_errors(); ?>
	      </div>
	      <div class="modal-footer">
		      <div class="pull-right" style="margin-top: 20px">
			  	<a href="#" onclick="document.getElementById('assessoria').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
			  </div>
	       <!--   <button type="button" class="btn btn-primary" onclick="$('#formulario_clientes').submit()">Salvar Alterações</button> -->
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	
	
	
</body>
</html>
