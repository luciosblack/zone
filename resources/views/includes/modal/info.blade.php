<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	      <div class="modal-header">
	        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="modalInfoLabel">Certidão de Zoneamento</h4>
	      </div>
				
				{{---------------------------- Modal Body --}}
	      <div class="modal-body">
	        <ul class="nav nav-pills nav-pills-primary" role="tablist">
				    <li class="nav-item">
				        <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
				        	Zoneamento
				        </a>
				    </li>
					</ul>
					<div class="tab-content tab-space">
				    
				    <div class="tab-pane active" id="link1" aria-expanded="true">
					    <div class="card">
					    	<h4 class="card-header card-header-primary text-center">Identifação da consulta</h4>
					    	<div class="card-body">
						      <div class="form-group row">
									 <label class="col-sm-2 col-form-label">Logradouro :</label>
									 <label class="col-sm-10 col-form-label">Teste</label>
									</div>
									<div class="form-group row">
									 <label class="col-sm-2 col-form-label">Bairro :</label>
									 <label class="col-sm-10 col-form-label">Teste</label>
									</div>
								</div>
							</div>

							<div class="card">
					    	<h4 class="card-header card-header-primary text-center">Zoneamento</h4>
					    	<div class="card-body">
					    		<h4 class="card-title text-center">A.O.P.1 - ÁREA DE OCUPAÇÃO PRIORITÁRIA 1</h4>
						      <div class="form-group row">
									 <label class="col-sm-10 col-form-label">R1 - Residencial Unifamiliar</label>
									 <label class="col-sm-2 col-form-label pull-right">Tolerado</label>
									</div>
								</div>
							</div>

							<div class="card">
					    	<h4 class="card-header card-header-primary text-center">Daddos informados pelo técnico</h4>
					    	<div class="card-body">
						      <div class="form-group row">
									 <label class="col-sm-3 col-form-label pull-left">Testada Mínima</label>
									 <label class="col-sm-9 col-form-label pull-right">10,00 metros</label>
									</div>
								</div>
							</div>
						</div>
					</div>
	      </div> {{-- Fim modal Body --}}
	      
	      <div class="modal-footer">
	        <button class="btn btn-primary btn-link" data-dismiss="modal">Close</button>
	        <a href="#" target="_blank" class="btn btn-primary btn-link pull-left">Imprimir</a>
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