
<section class="caixa mt-4">

						
                        <div class="titulo h5 mb-0"> <h2>Mural de Aviso</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."aviso/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Aviso</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
                    <div class="rows">
                        <?php foreach($lista as $aviso) {?>
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title"><?php echo $aviso->titulo; ?></h5>
									<p class="card-text"><?php echo $aviso->texto;  ?></p>
									<a href="https://mail.google.com/" class="btn btn-primary"><?php echo $aviso->remetente;  ?></a>
									<p class="card-text"><small class="text-muted"><?php echo date("d/m/Y", strtotime($aviso->data));  ?></small></p>
                                    
								</div>
								</div>
								<?php } ?>
                                </div>
                                </div>
					</div>
                    </div>
                    </div>


				<!-- <div class="tabela-responsiva tabela"> 


					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="left">ID</th>
							<th align="left">Carro</th>
							<th align="left">Vaga</th>
							<th align="center">Tempo</th>
							<th align="center">Preço</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
                            
							<?php  #foreach($lista as $aluguel) { ?>
							<tr>
								<td><?php #echo $aluguel->idaluguel; ?></td>
								<td><?php #echo $aluguel->carro; ?></td>
								<td><?php #echo $aluguel->vaga; ?></td>
								<td><?php #echo $aluguel->tempo; ?></td>
								<td align="center"><?php #echo $aluguel->preco; ?></td>
								<td align="center">
									<a href="<?php #echo URL_BASE."aluguel/edit/".$aluguel->idaluguel ?>" class="btn btn-editar" title="Editar"></a>
									<a href="<?php #echo URL_BASE."aluguel/excluir/".$aluguel->idaluguel ?>" class="btn btn-excluir" title="excluir"><img src="<?php echo URL_BASE. "assets/img/iconoir_trash.png"?>" alt="" height="20px"></a>
								</td>
							</tr>
							<?php #} ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>-->