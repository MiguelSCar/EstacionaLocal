<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."vaga/salvar" ?>" method="POST" id="form">				
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
										<label>Estado</label>
										<input name="estado" value="<?php echo isset($vaga) ? $vaga->estado : ""  ?>" type="text" placeholder="Insira o Estado da Vaga" class="form-campo" required>
									</div>
								<div class="col-4">
									<label>Preferencial</label>
									<input name="preferencial" value="<?php echo isset($vaga) ? $vaga->preferencial : ""  ?>" type="int" placeholder="Insira o ID Preferencial" class="form-campo" required>
								</div>									
												
														
																
								
								<div class="col-4 m-auto">
									<input type="hidden" name="idvaga" value="<?php echo isset($vaga) ? $vaga->idvaga : ""  ?>" id="botao"/>
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100" >
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>