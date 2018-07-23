<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">

				{{---------------------------- Modal Body --}}
	      <div class="modal-body">
	        <ul class="nav nav-pills nav-pills-primary" role="tablist">
				    <li class="nav-item">
				        <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
				        	Zoneamento
				        </a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="true">
				        	Daddos informados pelo técnico
				        </a>
				    </li>
					</ul>
					<div class="tab-content tab-space">
				    <div class="tab-pane active" id="link1" aria-expanded="true">
			    		<div class="table-responsive">
				    		<table class="table table-hover table-condensed">
				    			<thead>
				    				<tr>
				    					<th>Zona</th>
				    					<th>A.O.P.1</th>
				    					<th class>ÁREA DE OCUPAÇÃO PRIORITÁRIA 1</th>
				    				</tr>
				    			</thead>
				    			<tbody>
				    				<tr>
				    					<td>R1</td>
				    					<td>Residencial Unifamiliar</td>
				    					<td class="text-center">Tolerado</td>
				    				</tr>
				    				<tr>
				    					<td>R1</td>
				    					<td>Residencial Unifamiliar</td>
				    					<td class="text-center">Tolerado</td>
				    				</tr>
				    			</tbody>
				    		</table>
				    	</div>
						</div>
						<div class="tab-pane" id="link2" aria-expanded="true">
							<div class="table-responsive">
				    		<table class="table table-hover table-condensed">
				    			<tbody>
				    				<tr>
				    					<td></td>
				    					<td class="text-left">Testada Mínima</td>
				    					<td class="text-right">10,00 metros</td>
				    				</tr>
				    				<tr>
				    					<td></td>
				    					<td class="text-left">Área Total Mínima do Lote</td>
				    					<td class="text-right">125,00 m² cada lote</td>
				    				</tr>
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
	  $('#modalInfo').modal({backdrop: 'static'});
	});
</script>

@endpush