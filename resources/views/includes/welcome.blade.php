<!-- Modal Bem-vindo -->
<div class="modal fade" id="modalWelcome" tabindex="-1" role="dialog" aria-labelledby="modalWelcomeTitle" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
    	<div class="card card-signup card-plain">
	      <div class="modal-header">
	      	<div class="card-header card-header-primary text-center">
		        <h5 class="card-title" id="modalWelcomeTitle">Zoneamento 360</h5>
	        </div>
	      </div>
	      <div class="modal-body">
	        Bem vindo, campo para informação sobre o serviço do portal
	      </div>
	      <div class="">
	      	<button class="ajax btn btn-primary btn-sm btn-link" data-toggle="modal" data-target="#modalTermos" {{-- data-dismiss="modal" --}}>Termo de uso</button>	      	
	      	{{-- <button type="button" class="btn btn-primary btn-sm btn-link float-left" data-dismiss="modal">Cadastrar</button>
	        <button type="button" class="btn btn-primary btn-sm btn-link" data-dismiss="modal">Login</button> --}}
	        <button type="button" class="btn btn-primary btn-sm d-flex btn-link float-right" data-dismiss="modal">Entrar</button>
	      </div>
	    </div>
    </div>
  </div>
</div>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    	$('#modalWelcome').modal({backdrop: 'static', keyboard: false});
	})
</script>
@endpush