<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">

				{{---------------------------- Modal Body --}}
	      <div class="modal-body">
				<table id='tabela_titulo' class="table table-hover table-condensed" >
					<thead>
						<tr>
							<th id='sigla_zona'>A.O.P.1</th>
							<th id='nome_zona'>ÁREA DE OCUPAÇÃO PRIORITÁRIA 1</th>
						</tr>
					</thead>
				</table>
				  
				<ul class="nav nav-pills nav-pills-primary" role="tablist">
				    <li class="nav-item">
				        <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
				        	Zoneamento
				        </a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="true">
				        	Dados informados pelo técnico
				        </a>
				    </li>
					</ul>
					<div class="tab-content tab-space">
				    <div class="tab-pane active" id="link1" aria-expanded="true">
			    		<div class="table-responsive">
				    		<table id='tabela_zonas' class="table table-hover table-condensed" >
								<thead>
									<tr>
										<th>Uso:</th>
									</tr>
								</thead>

				    			<tbody>

								</tbody>
				    		</table>
				    	</div>
						</div>
						<div class="tab-pane" id="link2" aria-expanded="true">
							<div class="table-responsive">
				    		<table id='tabela_dados' class="table table-hover table-condensed">
				    			<tbody>

								</tbody>
				    		</table>
				    	</div>
						</div>
					</div>
	      </div> {{-- Fim modal Body --}}
	      
	      <div class="modal-footer d-flex">
	        <button class="btn btn-primary btn-link" data-dismiss="modal">Fechar</button>
	        <a href="relatorio" target="_blank" class="btn btn-primary btn-link ml-auto">Imprimir</a>
	      </div>

	    </div> {{-- Fim modal-content --}}
	  </div> {{-- Fim modal-dialog modal-lg --}}
</div> {{-- Fim #modalInfo --}}

@push('scripts')

<script type="text/javascript">
	$('#infowindow-content').click(function() {
		//pesquisa no banco de dados a ZONA selecionada em AREA_PESQUISADA
		$.get('/buscaZona?sigla='+area_pesquisada, function(resposta){

			// Converter os dados da API em objetos javascript
			resposta = JSON.parse(resposta);

			console.log(resposta);

			// Preencher o nome e a sigla da Zona no cabeçalho da tabela
			$('#sigla_zona').html(resposta.sigla);
			$('#nome_zona').html(resposta.nome);

			// Preencher a tabela
			$("#tabela_zonas tbody").empty();

			$.each(resposta.usos, function(indice, uso){
				let tipo_uso;
				// Inserir a linha na tabela apenas se o uso não for proibido
				if(uso.pivot.uso !== 'P')
				{
					// Descobrir qual o tipo de uso
					if(uso.pivot.uso === 'T')
						tipo_uso = "Tolerado";
					else if(uso.pivot.uso === 'P')
						tipo_uso = "Proibido";
					else
						tipo_uso = "Adequado";

					$("#tabela_zonas tbody")
					.append(`
						<tr>
							<td>${uso.codigo}</td>
							<td style="text-align:left;padding-left: 25px;">${uso.descricao}</td>
							<td class="text-center">${tipo_uso}</td>
						</tr>`
					);
				}

			});







			// Preencher a tabela
			$("#tabela_dados tbody").empty();

			$("#tabela_dados tbody")
			.append(`
				<tr>
					<td></td>
					<td class="text-left">Testada Mínima</td>
					<td class="text-center">${resposta.testada}</td>
				</tr>
				
				<tr>
					<td></td>
					<td class="text-left">Área Total Mínima do Lote</td>
					<td class="text-center">${resposta.area}</td>
				</tr>
				
				<tr>
					<td></td>
					<td class="text-left">Coeficiente de Aproveitamento Mínimo</td>
					<td class="text-center">${resposta.coeficiente_min}</td>
				</tr>
				
				<tr>
					<td></td>
					<td class="text-left">Coeficiente de Aproveitamento Básico</td>
					<td class="text-center">${resposta.coeficiente_bas}</td>
				</tr>
				
				<tr>
					<td></td>
					<td class="text-left">Coeficiente de Aproveitamento Máximo</td>
					<td class="text-center">${resposta.coeficiente_max}</td>
				</tr>

				<tr>
					<td></td>
					<td class="text-left">Afastamento Frontal</td>
					<td class="text-center">${resposta.afastamento}</td>
				</tr>

				<tr>
					<td></td>
					<td class="text-left">Taxa de Ocupação</td>
					<td class="text-center">${resposta.tx_ocupacao}</td>
				</tr>

				<tr>
					<td></td>
					<td class="text-left">Taxa de Permeabilidade</td>
					<td class="text-center">${resposta.tx_permeabilidade}</td>
				</tr>

				<tr>
					<td></td>
					<td class="text-left">Vagas de Estacionamento</td>
					<td class="text-center">${resposta.vagas_estacionamento}</td>
				</tr>
				`

				
			);



			$('#modalInfo').modal({backdrop: 'static'});

		});

	});
</script>

@endpush