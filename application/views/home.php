<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	
	<!-- Runbbit favicon -->
	<link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>" sizes="16x16">
	
	<title>GoGor - Runbbit</title>
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/roboto.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/material-fullpalette.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ripples.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/runbbit.css'); ?>">

	<style>
	body {
		padding-top: 15px;
	}
	form .alert {
		display: none;
	}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>


<body>

<!--[if lt IE 8]>
<p closeass="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

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
	<div class="modal fade bs-example-modal-lg" id="modalLogin" >
		<div class="modal-dialog">
			<div class="modal-content runbbit_bg">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        		<h4 class="modal-title">Login</h4>
	      		</div>
	      		<div class="modal-body">
			
				<!-- Login Form -->	
				
					<?php 
						$attrib = array('id' => 'formLogin', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home',$attrib); 
					?>
						<fieldset>
							<div class="form-group col-sm-12"  style="margin-top: 30px">
								<input 	name="username" 
										type="text" 
										class="runbbit_form-control" 
										placeholder="Email" 
										data-title="Email inválido" 
										required="" 
										data-regex="email" />
							</div>
	
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="password" 
										type="password" 
										class="runbbit_form-control" 
										placeholder="Senha" 
										data-title="Senha inválida" 
										required="" 
										data-regex="^[a-z0-9A-Z]{3,30}$" />
							</div>
							
							<div class="col-sm-12" style="margin-top: 10px">
 								<label><input type="checkbox"> Lembrar meus dados neste computador</label>	
							</div>
							
							
							<div class="modal-footer">
								<div class="form-group pull-right" style="margin-top: 20px">
									<button class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;" type="submit"></button>
								</div>
							</div>	
						</fieldset>
					</form>

				</div> <!-- /.modal-body -->
	  		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	

	
	
	<!--  Modal Assessoria -->		
	<div class="modal fade bs-example-modal-lg" id="modalAssessoria" >
		<div class="modal-dialog">
			<div class="modal-content runbbit_bg">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        		<h4 class="modal-title">Inscrição Assessoria</h4>
	      		</div>
	      		<div class="modal-body">
			
				<!-- Assessoria Form -->	
				
					<?php 
						$attrib = array('id' => 'formAssessoria', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home/cadastro',$attrib); 
					?>
						<fieldset>
						
		
							<div class="form-group col-sm-12"  style="margin-top: 30px">
								<input 	name="assessoria" 
										type="text" 
										class="runbbit_form-control" 
										id="Assessoria" 
										placeholder="Nome da assessoria" 
										data-title="Nome de assessoria inválido" 
										required="" 
										data-regex="^[a-z0-9A-Z]{3,50}$" />
							</div>
	
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="cnpjcpf"
										type="text" 
										class="runbbit_form-control" 
										id="Cnpjcpf" 
										placeholder="CNPJ ou CPF" 
										data-title="CNPJ ou CPF inválidos" 
										required="" 
										data-regex="^[0-9\-\.]{3,30}$" />  
							</div>
							
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="nome"
										type="text" 
										class="runbbit_form-control" 
										id="Nome" 
										placeholder="Nome do responsável" 
										data-title="Nome inválido" 
										required="" 
										data-regex="^[a-z0-9A-Z]{3,50}$" /> 
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="senha" 
										type="password" 
										class="runbbit_form-control" 
										id="Senha"
										placeholder="Senha" 
										data-title="Senha inválida" 
										required="" 
										data-equals="resenha"
										data-regex="^[a-z0-9A-Z]{3,30}$" />
							</div>
							
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="resenha" 
										type="password" 
										class="runbbit_form-control" 
										id="Resenha"
										placeholder="Senha" 
										data-title="Repetir senha" 
										required="" 
										data-regex="^[a-z0-9A-Z]{3,30}$" />
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="email" class="runbbit_form-control" id="Email" placeholder="Email" name="email" maxlength="200">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="email" class="runbbit_form-control" id="Remail" placeholder="Confirme email" name="remail" maxlength="200">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="text" class="runbbit_form-control" id="Telefone" placeholder="Telefone" name="telefone" maxlength="200">
							</div>

									
							<div class="modal-footer">
								<div class="form-group pull-right" style="margin-top: 20px">
									<button class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;" type="submit"></button>
								</div>
							</div>	
						</fieldset>
					</form>

				</div> <!-- /.modal-body -->
	  		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	
	
	
	
	<!--  Modal Corredor -->		
	<div class="modal fade bs-example-modal-lg" id="modalCorredor" >
		<div class="modal-dialog">
			<div class="modal-content runbbit_bg">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
	        		<h4 class="modal-title">Inscrição Corredor</h4>
	      		</div>
	      		<div class="modal-body">
			
				<!-- Assessoria Form -->	
				
					<?php 
						$attrib = array('id' => 'formCorredor', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('home/cadastro',$attrib); 
					?>
						<fieldset>
						
		
							<div class="form-group col-sm-12"  style="margin-top: 30px">
								<input 	name="assessoria" 
										type="text" 
										class="runbbit_form-control" 
										id="Assessoria" 
										placeholder="Nome da assessoria" 
										data-title="Nome inválido" 
										required="" 
										data-regex="^[a-z0-9A-Z]{3,50}$" />
							</div>
	
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input 	name="cnpjcpf"
										type="text" 
										class="runbbit_form-control" 
										id="Cnpjcpf" 
										placeholder="CNPJ ou CPF" 
										required="" 
										data-regex="^[0-9\-\.]{3,30}$" />  
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="text" class="runbbit_form-control" id="Nome" placeholder="Nome do responsável" name="nome" maxlength="200">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="password" class="runbbit_form-control" id="Senha" placeholder="Senha" name="senha" maxlength="30">
							</div>
							
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="password" class="runbbit_form-control" id="Resenha" placeholder="Repetir senha" name="resenha" maxlength="30">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="email" class="runbbit_form-control" id="Email" placeholder="Email" name="email" maxlength="200">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="email" class="runbbit_form-control" id="Remail" placeholder="Confirme email" name="remail" maxlength="200">
							</div>
		
							<div class="form-group col-sm-12"  style="margin-top: 10px">
								<input type="text" class="runbbit_form-control" id="Telefone" placeholder="Telefone" name="telefone" maxlength="200">
							</div>

									
							<div class="modal-footer">
								<div class="form-group pull-right" style="margin-top: 20px">
									<button class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;" type="submit"></button>
								</div>
							</div>	
						</fieldset>
					</form>

				</div> <!-- /.modal-body -->
	  		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->  	
	

	<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/material.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ripples.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.validator.js'); ?>"></script>
	
	
<script>
	$.material.init();

	//login
	
	function janelaLogin(){		
		$('#modalLogin').modal('show');
	}

	$(document.getElementById('formLogin')).bootstrap3Validate(function(e, data) {
		e.preventDefault();

		document.getElementById('formLogin').submit();
	});

	//corredor
	
	function janelaCorredor(){		
    	$('#modalCorredor').modal('show');
	}

	$(document.getElementById('formCorredor')).bootstrap3Validate(function(e, data) {
		e.preventDefault();

		document.getElementById('formCorredor').submit();
	});

	//assessoria
	
	function janelaAssessoria(){		
    	$('#modalAssessoria').modal('show');
	}
	    
	$(document.getElementById('formAssessoria')).bootstrap3Validate(function(e, data) {
		e.preventDefault();

		document.getElementById('formAssessoria').submit();
	});


	
</script>

</body>
</html>