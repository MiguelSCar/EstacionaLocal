<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."aviso/salvar" ?>" method="POST" id="form">				
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
										<label>Título</label>
										<input name="titulo" value="<?php echo isset($aviso) ? $aviso->titulo : ""  ?>" type="text" placeholder="Insira um Título" class="form-campo" required>
									</div>
								<div class="col-4">
									<label>Texto</label>
									<input name="texto" value="<?php echo isset($aviso) ? $aviso->texto : ""  ?>" type="text" placeholder="Insira o Texto" class="form-campo"  required>
								</div>									
									<div class="col-3">
										<label>Remetente</label>
										<input name="remetente" value="<?php echo isset($aviso) ? $aviso->remetente : ""  ?>" type="text" placeholder="Insira o Remetente" class="form-campo" required>
									</div>	
									<div class="col-3">
										<label>Data</label>
										<input name="data" value="<?php echo isset($aviso) ? $aviso->data : ""  ?>" type="date" placeholder="Insira a Data" class="form-campo" required>
									</div>					
														
																
								
								<div class="col-4 m-auto">
									<input type="hidden" name="idaviso" value="<?php echo isset($aviso) ? $aviso->idaviso : ""  ?>" id="botao"/>
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>