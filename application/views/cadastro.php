

		<div class="row-fluid">
			<br />			

			<div class="col-xs-12 col-lg-12 text-center">		
				<H3>Cadastro</H3>
			</div>
        </div>
			<br />
			<br />
			<br />
			<br />
		<div class="row-fluid">	
			<div class="col-xs-3 col-lg-3 text-center"></div>
			<div class="col-xs-6 col-lg-6">
				<div class="jumbotron runbbit_bg" id="Area-cadastro">
					<?php 
						$attrib = array('id' => 'cadastro', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('main/cadastro',$attrib); 
					?>
					<div class="form-group">
		
						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 30px">Nome da assessoria:</span></label>
						<div class="col-sm-9" style="margin-top: 30px">
							<input type="text" class="runbbit_form-control" id="Assessoria" placeholder="Nome da assessoria" name="assessoria" maxlength="200">
						</div>

						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 10px">CNPJ ou CPF:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Cnpjcpf" placeholder="CNPJ ou CPF" name="cnpjcpf" maxlength="200">
						</div>
	
						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 10px">Nome do responsável:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Nome" placeholder="Nome do responsável" name="nome" maxlength="200">
						</div>
	
						<label class="col-sm-3" for="senha"><span class="pull-right" style="margin-top: 10px">Senha:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="Senha" placeholder="Senha" name="senha" maxlength="30">
						</div>
						
						<label class="col-sm-3" for="senha"><span class="pull-right" style="margin-top: 10px">Repetir senha:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="Resenha" placeholder="Repetir senha" name="resenha" maxlength="30">
						</div>
	
						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 10px">Email:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="email" class="runbbit_form-control" id="Email" placeholder="Email" name="email" maxlength="200">
						</div>
	
						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 10px">Confirme email:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="email" class="runbbit_form-control" id="Remail" placeholder="Confirme email" name="remail" maxlength="200">
						</div>
	
						<label class="col-sm-3" for="email"><span class="pull-right" style="margin-top: 10px">Telefone:</span></label>
						<div class="col-sm-9" style="margin-top: 10px">
							<input type="text" class="runbbit_form-control" id="Telefone" placeholder="Telefone" name="telefone" maxlength="200">
						</div>

						<div class="pull-right" style="margin-top: 20px">
						<a href="#" onclick="document.getElementById('login').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
						</div>
					 </div> 
					</form>
				</div>   	
				<?php echo validation_errors(); ?>		
			</div>
			<div class="col-xs-3 col-lg-3 text-center"></div>	
		</div>	


