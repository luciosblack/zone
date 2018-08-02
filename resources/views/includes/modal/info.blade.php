<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	    	<div class="card  card-signup card-plain">
		    	<div class="modal-header">
						<div class="card-header card-header-text card-header-success">
								<div class="card-text col-sm">
									<div class="row">
										<div id="sigla_zona"class="h5 col-sm-3 text-right"></div>
										<div id="nome_zona" class="h5 col-sm-8 text-center"></div>
									</div>
								</div>
						</div>
					</div>

					{{---------------------------- Modal Body --}}
		      <div class="modal-body">
					<ul class="nav nav-pills nav-pills-success" role="tablist">
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
					    	<footer class="card-footer text-muted d-flex flex-wrap">
			            <p class="col-sm-12">
			              - A quantidade de pavimento é obtida através da relação de metros quadrados passíveis de construção com a taxa de ocupação<br>
			              OBS: (AT: Área do terreno) x (CAT Máximo) = quantidade total de metros quadrados passíveis de construção
			            </p>
			            <p class="col-sm-12">- Para uso residencial considera-se uma vaga de estacionamento por unidade </p>
			            <p class="col-sm-12">- Esta certidão tem sua informações extraídas da lei de Uso, ocupão e parcelamento do solo urbano de nº 015 de 14 de fevereiro de 2001 e do Plano Diretor Municipal de lei nº355 de 25 de outubro de 2006</p>
			            <p class="col-sm-12">- Para construção com coeficiente de aproveitamento acima do coeficiente básico será cobrada a outorga oneroso do direito de construir, de acordo com os artigos <a href="http://www.mesquita.rj.gov.br/pmm/wp-content/uploads/2017/06/LEI-COMPLEMENTAR-N%C2%B0-015-2011-USO-DO-SOLOX-PUBLICADA-EM-15-02-2011.pdf" target="_blank">127 à 129 da lei municipal nº 15/2011 - LUOPS (Lei de uso ocupação e parcelamento do solo)</a></p>
			            <p class="date-print col-sm-12 text-right"></p>
			          </footer>
							</div>
						</div>
		      </div> {{-- Fim modal Body --}}
		      
		      <div class="modal-footer d-flex">
		        <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
		        <a href="relatorio" target="_blank" id="btn_imprimir" class="btn btn-success ml-auto">Imprimir</a>
		      </div>
		    </div>
	    </div> {{-- Fim modal-content --}}
	  </div> {{-- Fim modal-dialog modal-lg --}}
</div> {{-- Fim #modalInfo --}}

@push('scripts')

<script type="text/javascript">
	$('#infowindow-content').click(function() {
		//pesquisa no banco de dados a ZONA selecionada em AREA_PESQUISADA
		 
		$.get('{{ url("/buscaZona?sigla=")}}'+area_pesquisada, function(resposta){

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

				// Colocar o valor que o usuário pesquisou em um campo hidden do formulário
				$("input#campo_pesquisa").val($("#pac-input").val());
				// Colocar o id da zona pesquisada no formulário
				$("input#id_zona").val(resposta.id);

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

	// Botão de imprimir
	$("#btn_imprimir").click(function(e){

		e.preventDefault();

		$("form#formRelatorio").submit();

	})
</script>

@endpush