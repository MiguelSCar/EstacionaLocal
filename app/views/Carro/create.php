<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."carro/salvar" ?>" method="POST" id="form" name="form">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  <div class="col-3 position-relative">									
									<img src="img/img-usuario.png" class="img-fluido foto">
									<div  class="foto-file">
										<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
									</div>
									<small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
								</div>
								
								<div class="col-9">
								<div class="rows">
								    <div class="col-8">
										<label>Nome do Carro</label>
										<input name="nome" value="<?php echo isset($carro) ? $carro->nome : ""  ?>" type="text" placeholder="Insira um nome do Carro" class="form-campo" required>
									</div>
								<div class="col-4">
									<label>Marca</label>
									<input name="marca" value="<?php echo isset($carro) ? $carro->marca : ""  ?>" type="text" placeholder="Insira sua marca" class="form-campo" required>
								</div>									
									<div class="col-3">
										<label>Cor</label>
										<input name="cor" value="<?php echo isset($carro) ? $carro->cor : ""  ?>" type="text" placeholder="Insira a cor" class="form-campo" required>
									</div>			
									
									<div class="col-3">
										<label>Cliente</label>
										<input name="cliente" value="<?php echo isset($carro) ? $carro->cliente : ""  ?>" type="text" placeholder="Insira o cliente" class="form-campo" required>
									</div>		

									<div class="col-3">
										<label>Email</label>
										<input name="email" value="<?php echo isset($carro) ? $carro->email : ""  ?>" type="text" placeholder="Insira o Email" class="form-campo" required>
									</div>		

									<div class="col-3">
										<label>Celular</label>
										<input name="celular" value="<?php echo isset($carro) ? $carro->celular : ""  ?>" type="int" placeholder="Insira a cor" class="form-campo" required>
									</div>		
														
																
								
								<div class="col-4 m-auto">
									<input type="hidden" name="idcarro" value="<?php echo isset($carro) ? $carro->idcarro : ""  ?>" id="botao"/>
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>