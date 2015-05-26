

		<div class="row-fluid">
			<br />
			<img src="<?php echo base_url('assets/img/runbbit_logo.png'); ?>" class="img-responsive center-block" alt="" />
			<div class="col-xs-12 col-lg-12 text-center">		
				<H3>Entrar no Runbbit</H3>
			</div>
        </div>
			<br />
			<br />
			<br />
			<br />
		<div class="row-fluid">	
			<div class="col-xs-4 col-lg-4 text-center"></div>
			<div class="col-xs-4 col-lg-4 text-center">
				<div class="jumbotron runbbit_bg" id="login-content">
					<?php 
						$attrib = array('id' => 'login', 'class' => 'form-horizontal', 'role' => 'form');
						echo form_open('main',$attrib); 
					?>
					<div class="form-group">
					
						<label class="col-sm-2" for="email" style="margin-top: 30px">Email:</label>
						<div class="col-sm-10" style="margin-top: 30px">
							<input type="email" class="runbbit_form-control" id="username" placeholder="Email" name="username" maxlength="200">
						</div>

						<label class="col-sm-2" for="senha" style="margin-top: 10px">Senha:</label>
						<div class="col-sm-10" style="margin-top: 10px">
							<input type="password" class="runbbit_form-control" id="password" placeholder="senha" name="password" maxlength="30">
						</div>
	
						<div class="pull-right" style="margin-top: 20px">
						<a href="#" onclick="document.getElementById('login').submit();" class="btn btn-info btn-fab btn-raised mdi-av-play-arrow" style="margin-right: 10px;"></a>
						</div>
					 </div> 
					</form>
				</div>   	
				<?php echo validation_errors(); ?>		
			</div>
			<div class="col-xs-4 col-lg-4 text-center"></div>	
		</div>	


